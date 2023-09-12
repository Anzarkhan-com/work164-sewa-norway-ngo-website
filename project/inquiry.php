<?php
ob_start();
if (isset($_POST['submit'])) {
	$message = "Name : $_POST[name]\n Mobile No. : $_POST[phone]\n Email : $_POST[email]\n Message : $_POST[message]\n ";
	$message1 = "Thank you $_POST[name] for your Message. We have received your details and shall get back to you shortly. Thank you \n ";
	$headers = "From: <content@socialtalkers.in>";
	mail("ladhawala.nimit@gmail.com", "Message from Sewa Norway Website", $message, $headers);
	mail("$_POST[email]", "Message from Sewa Norway Website", $message1, $headers);
}
header('location:thanks.php');
exit(0);
