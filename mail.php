<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$text = $_POST['text'];
$additional_options = implode(' | ', $_POST['checkbox_group_1']);
$body_message .= 'Services selected:' . $additional_options;
$formcontent="From: $name \n Message: $text";
$recipient = "dylanmccall@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail ($dylanmccall20@gmail.com, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
