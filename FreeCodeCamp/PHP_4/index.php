<!DOCTYPE html>
<html lang="pl">
	
	<head>
		
		<meta charset="utf-8"/>
		
	</head>
	
	<body>
		
		<form action="index.php" method="post">
			
			<span><label>Name: <input type="text" name="name"></label></span>
			<br>
			<span><label>Password: <input type="password" name="password"></label></span>
			<br>
			<input type="submit">
			
		</form>
		
		<hr>
		
		<?php
			
			$name = $_POST['name'];
			$pass = $_POST['password'];
			
			echo "Witaj $name!";
			
		?>
		
	</body>
	
</html>