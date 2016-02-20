<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$recipient = "hannahdroe@gmail.com";
$formContent = "From: $name \n Message: $message";
$subject = "Contact Form";
mail($recipient, $formContent, $subject, $message);

?>
