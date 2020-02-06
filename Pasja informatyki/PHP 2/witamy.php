<?php
	session_start();
	
	if(!isset($_SESSION['regSuccess'])) {
		header('Location: gra.php');
		exit();
	} else {
		unset($_SESSION['$regSuccess']);
	}
?>

<!DCOTYPE html>
<html lanp="pl">
	
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<title>Osadnicy - gra przeglądarkowa</title>
		
	</head>
	
	<body>
		
		Dziękujemy za rejestrację w serwisie! Możesz już zalogować się na swoje konto!<br><br>
		
		<a href="index.php">Zaloguj się na konto!</a>
		
	</body>
	
</html>