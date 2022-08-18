<?php
if($_POST["submit"]) {
$recipient = "sai.chittala@gmail.com"; //my email
$subject = 'Email message from Point Plumbing';
$name = $_POST ["yourName"];
$email = $_POST["yourEmail"];
$subject = $_POST["subject"];
$message = $_POST["message-me"];

$mailBody="Name: $name\nEmail: $email\n\n$message";
$mail($recipient, $subject, $mailBody, "From: $name <$email>");
$thankYou="<p>Thank you! We will be in contact with you shortly.</p>";
}
?>
