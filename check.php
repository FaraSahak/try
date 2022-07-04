<?php
	$email = $_POST['Email'];
	$message = $_POST['Message'];

	$error = "";
	if (trim($email) == "")
		$error = "Please enter your email";
	elseif (trim($message) == "")
		$error = "Please write a message";

	if ($error != "") {
		echo $error;
		exit;
	}

	$subject = "=?utf-8?B?".base64_encode("Messsage")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

	mail("meolab32@gmail.com", $subject, $message, $headers);

	header('Location: contact.html')
?>