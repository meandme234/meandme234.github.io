<?php
$name=$fname=$email=$subject=$content="";

if($_SERVER["REQUEST METHOD"] == "POST")
{
	$message_body = '';
	unset($_POST['submit']);
	foreach ($_POST as $key => $value){
		$message_body .= "$key: $value \n";
	}
	$to = 'mubashshir12uddin@gmail.com';
	$subject= 'contact form from your website';
	mail($to,$subject,$message_body)
}