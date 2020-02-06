<?php
	
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_USER', 'root');
	DEFINE('DB_PASSWORD', '');
	DEFINE('DB_NAME', 'derekbanassql');
	
	//	echo 'zdefiniowano stałe...<br>';
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Cannot connect to MySQL '
			. mysqli_connect_error());
	
?>