<?php
	
	if($_SERVER['PHP_AUTH_USER'] !== 'admin' &&
	$_SERVER['PHP_AUTH_PW'] !== 'admin') {
		header('WWW-Authwnticate: Basic realm=\"Przemek\"');
		header('HTTP\ 1.0 401 Unauthorized');
		echo 'There was an error';
		exit();
	}
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<p> Hello world! </p>
	</body>
</html>