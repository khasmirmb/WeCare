<?php

// Imports PHPMailers Classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// include library files

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Create an instance; Pass true to enable exception
$mail = new PHPMailer;

// Server settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'xt202001178@wmsu.edu.ph';
$mail->Password = 'alvinerpangit1';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

// Sender Info
$name = $_POST['firstname'] . " " . $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mail->setFrom($email);

// Recipient
$mail->addAddress('xt202001178@wmsu.edu.ph');

// Set email format to HTML
$mail->isHTML(true);

// Mail Subject
$mail->Subject = 'Email from Contact WeCare';

// Mail Content
$bodyContent = '<h2> WeCare Support </h2>' . '<p>Name:'. $name . '</p>'. '<p>Email:'. $email . '</p>'. '<p>Phone Number:'. $phone . '</p>' . '<p>'. $message . '</p>';

$mail->Body = $bodyContent;

// Send Mail
if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not sent. Mail Error'. $mail->ErrorInfo;
}

?>