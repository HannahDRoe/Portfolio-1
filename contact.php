<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$recipient = 'hannahdroe@gmail.com'; 
	$subject = 'Website Contact'

	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

	
    mail ($recipient, $subject, $body) or die("Something happened");
    echo "Thanks!";
      
    

?>