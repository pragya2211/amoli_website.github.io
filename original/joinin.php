<?php $name = $_GET['Name'];
$email = $_GET['Email'];
$number = $_GET['Number'];
$why = $_GET['Why'];


$subject = "$name | Join us form submission.";
$mailheader = "From: $email \r\n";
$formcontent = "Name: $name \n\n Email: $email \n\n Number: $number \n\n Reason: $why";

$recipient = "helpdesk@amolitrust.com";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// mail($_cc, $subject, $formcontent, $mailheader) or die("Error!");
header("location:https://amolitrust.com/thank-you.html");
?>