<?php
include 'saveContactFormdata.php';
function emailController()
{	
    
	include plugin_dir_path(__FILE__).'ContactForm.php';//plugin path
	
	if(isset($_POST['wpfc_btn'])){
		
		$name = filter_var($_POST['wpfc_name'],FILTER_SANITIZE_STRING);
		$message = filter_var($_POST['wpfc_message'],FILTER_SANITIZE_STRING);
		$subject = filter_var($_POST['wpfc_subject'],FILTER_SANITIZE_STRING);
		$headers = "From: ".$name." <".$_POST['wpfc_email']."> \r\n";
		
		$result= wp_mail("pkgaphola@ymail.com",$subject,$message,$headers);

		if($result){
			saveContactData($name,filter_var($_POST['wpfc_email'],FILTER_VALIDATE_EMAIL),$subject,$message);
			echo " Thank you ".$name." for contacting us, You'll get a response from our support team!";
			
		}else{
			echo "something went wrong! email could not be sent";			
		}
	}
	
}

function contactMenu() {	 	 
    add_menu_page(
        'Contact Us - Phase 2'/*page title*/,
        'Contact-2' /*menu name in admin panel*/,
        'manage_options',
		'contact-page'/*menu_slug*/,
        'display'/*callable function*/,
		plugin_dir_path(__FILE__).'img/contacts.png'/*Icon url*/
    );
	add_submenu_page( 'contact-page', 'User requests', 'Contact options',
    'manage_options', '','display');
}

function display(){
	$messages = displayData();
    include 'viewMessages1.php';
}
add_action( 'admin_menu', 'contactMenu' );
add_shortcode('contact-p2','emailController2');
?>