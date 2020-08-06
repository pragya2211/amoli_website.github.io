<?php 
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($message)) {
    $note = 'No Message.';
}

if (empty($phone)) {
    $phone = 'No Phone.';
}

$subject = "Enquiry Form - $name | $email ";
$mailheader = "From: $email \r\n";
$formcontent = "Phone: $phone \n\nMessage: $message";

$recipient = "info@lavanyamedicals.com";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("location:https://lavanyamedicals.com");
?>