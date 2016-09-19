<?php
//require_once(plugin_dir_path(__FILE__).'wp-config.php');

$wp_config_path = dirname(dirname(dirname(dirname(__FILE__))));
  if (file_exists($wp_config_path . DIRECTORY_SEPARATOR . "wp-config.php")) {
      include_once ($wp_config_path . DIRECTORY_SEPARATOR . "wp-config.php");
      } else {
      include_once (dirname($wp_config_path)) . DIRECTORY_SEPARATOR . "wp-config.php";
  }
  
function saveContactData($pName,$pEmail,$psubject,$pmessage){
	create_contact_table();
	
	 $GLOBALS['wpdb']->insert('wp_contactData',array('name'=>$pName,'email'=>$pEmail,'subject'=>$psubject,'message'=>$pmessage),array('%s','%s','%s','%s'));
}
function displayData(){
	$messageArray = $GLOBALS['wpdb']->get_results("select name,email,subject,message from wp_contactData");
	return $messageArray;
}

function create_contact_table() {

     $table_name = 'wp_contactData';
     $wpdb_collate = $GLOBALS['wpdb']->collate;
     $sql =
         "CREATE TABLE ".$table_name." (
         name varchar(30),
         email varchar(30) NULL,
		 subject varchar(30),
		 message varchar(30)
         )
         COLLATE ".$wpdb_collate;
 
     require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
     dbDelta( $sql );
 }