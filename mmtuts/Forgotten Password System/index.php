<?php
	
	require_once('PHPMailer\PHPMailer-master\PHPMailer-master\src\PHPMailer.php');
	
	$mail = new PHPMailer();
	$mail -> isSMTP();
	$mail -> SMTPAuth();
	$mail -> SMTPSecure = 'ss1';
	$mail -> Host = 'smtp.gmail.com';
	$mail -> Port = '465';
	$mail -> isHTML();
	$mail -> Username = 'email@gmail.com';
	$mail -> Password = 'rhvv82kr829s1';
	$mail -> SetForm('no-reply@howcode.org');
	$mail -> Subject = 'Hello World!';
	$mail -> Body = 'A test mail';
	$mail -> AddAddress('mail');
	
	$mail -> Send();
	
?>