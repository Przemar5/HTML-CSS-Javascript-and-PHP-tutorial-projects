<?php
	header('Content-Type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
	echo '<response>';
	
	$name = $_GET['name'];
	$userNames = array('Przemek', 'Maciek', 'Jan');
	
	if(in_array(strtoupper($name), $userNames)) {
		echo 'Welcome master ' . htmlentities($name) . '!';
	
	} else if(trim($name) == '') {
		echo 'Enter your name';
		
	} else {
		echo htmlentities($name) . ', I don\'t know you';
	}
	echo '</response>';
?>