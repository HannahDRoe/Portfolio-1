<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$recipient = "hannahdroe@gmail.com";
$subject = "Contact Form";
mail($recipient, $subject, $message);

?>
