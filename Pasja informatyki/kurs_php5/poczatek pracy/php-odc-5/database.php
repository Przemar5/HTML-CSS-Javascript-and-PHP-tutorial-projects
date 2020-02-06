<?php

	$config = require_once 'config.php';
	
	try {
		$dsn = "mysql:host={$config['host']};dbname={$config['dbName']};charset=utf8"; 
		
		$conn = new PDO($dsn, $config['dbUser'], $config['dbPassword'], 
						[PDO::ATTR_EMULATE_PREPARES => false, 			//	zapytanie i dane zostaną wysłane oddzielnie (2 drogi do serwera)
						 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);	//	
	} catch(PDOException $error) {
		echo $error -> getMessage();
		exit('Database error');
	}

?>