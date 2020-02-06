<?php
	session_start();
	
	if((isset($_SESSION['logged'])) && ($_SESSION['logged'] == true)) {
		header('Location: gra.php');
		exit();
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
		
		To jest prototyp gry<br><br>
		
		<a href="rejestracja.php">Rejestracja - załóż darmowe konto</a>
		
		<form action="zaloguj.php" method="post">
			
			<label><div>Login: <input type="text" name="login"/><div></label>
			
			<label><div>Hasło: <input type="password" name="pass"/><div></label>
			
			<input type="submit" value="Zaloguj się"/>
			
		</form>
		
		<?php
			if(isset($_SESSION['error'])) {
				echo $_SESSION['error'];
			}
		?>
		
	</body>
	
</html>