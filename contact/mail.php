<?php

// Get the data inputed by the user
$name = $_POST['firstname'] . " " . $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Email where to send the inputs
$to = "alamnaerz23@gmail.com";

// Subject will be send to email
$subject = "Mail from WeCare Website";

// Message Header
$headers = "From: " . $name . "(" . $email . ")" . "\r\n" .
"CC: alamnaerz23@gmail.com";

// Message Content
$txt = "You have received an email from " . "\r\n Email: " . $email . "\r\n Message: ". $message;

// Send the content if email is not null
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

// redirect
header('Location: contact.php')

?>