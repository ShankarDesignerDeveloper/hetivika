<?php
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];
if (empty($name) || empty($email) || empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("info@hetvikaeducationalacademy.co.in", "Response from Website", $message, "From: $name <$email>");
    echo "Message sent successfully";
}
?>