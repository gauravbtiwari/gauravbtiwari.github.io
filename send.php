<?php
session_start();

$name = $_POST['Name']; 
$lname = $_POST['LName']; 
$email = $_POST['email']; 
$subject= $_POST['subject']; 
$message = $_POST['message']; 

	$to = 'tgaurav108@gmail.com'; 
	$email_subject = "$subject";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email \n Subject: $subject \n Message:$message \n"; 
	
	$headers = "From: $email\n"; 
	$headers .= "Reply-To: $email";
	
	mail($to,$email_subject,$email_body,$headers);

echo '<script type="text/javascript">alert("we will connect with you asap..");window.location=\'index.php\';</script>';


?>
