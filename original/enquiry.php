<?php $name = $_GET['Name'];
$email = $_GET['Email'];
$message = $_GET['Message'];

$subject = "Contact Form - $name | $email ";
$mailheader = "From: $email \r\n";
$formcontent = "$message";

$recipient = "helpdesk@amolitrust.com";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// mail($_cc, $subject, $formcontent, $mailheader) or die("Error!");
header("location:https://amolitrust.com/thank-you.html");
?>