<?php $name = $_GET['Name'];
$email = $_GET['Email'];
$story = $_GET['Story'];
$YN = $_GET['YN'];

if (empty($email)) {
    $email = 'NA.';
}


$subject = "Story from - $name | $email ";
$mailheader = "From: $email \r\n";
$formcontent = "Story: $story \n\n Would you allow the society to share your story? Y/n: $YN";

$recipient = "helpdesk@amolitrust.com";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// mail($_cc, $subject, $formcontent, $mailheader) or die("Error!");
header("location:https://amolitrust.com/thank-you.html");
?>