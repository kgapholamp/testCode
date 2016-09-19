<?php
		echo '<b>CUSTOMER REQUETS</b> <br><br>';
		foreach($messages as $message){
		 echo $message->name .'<p class= "triangle-isosceles"><b>'.$message->subject.': </b><small>'.$message->email.'</small><br>'.$message->message.'</p>';	 
		}
?>


<style>
.triangle-isosceles {
  position: relative;
  padding: 15px;
  margin: 1em 0 3em;
  color: #000;
  background: #f3961c;
  border-radius: 10px;
  background: linear-gradient(top, #f9d835, #f3961c);
}

/* creates triangle */
.triangle-isosceles:after {
  content: "";
  display: block; /* reduce the damage in FF3.0 */
  position: absolute;
  bottom: -15px;
  left: 50px;
  width: 0;
  border-width: 15px 15px 0;
  border-style: solid;
  border-color: #f3961c transparent;
}
<style/>