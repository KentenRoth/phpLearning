<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mailTo = 'kentenroth@yahoo.com';
	$headers = 'FROM: ' . $mailFrom;
	$txt = 'You have recieved an email from ' . $name . ". \n\n" . $message;

	mail($mailTo, $subject, $text, $headers);
	header('Location: index.php?mailsent');
}
