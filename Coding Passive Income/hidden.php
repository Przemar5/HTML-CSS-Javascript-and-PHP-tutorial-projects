<?php
	session_start();
	
	if(!isset($_session['logged'])) {
		header('Location: login.php');
		exit();
	}
?>

You are logged in!

<a href="logout.php">Log out</a>