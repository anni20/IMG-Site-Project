<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$message = $_POST['message'];
$formcontent=" From: $name \n type: $type \n text: $text";
$recipient = "ralica.bankova@abv.bg";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
if (mail) {
	echo "Thank you!";
}

if(!POST[name]) {
	echo "Please, fill the name field";
}

if(!POST[email]) {
	echo "Please, fill the email field";
}

if (!POST[text]) {
	echo "Please, fill the text area field";
}
?>