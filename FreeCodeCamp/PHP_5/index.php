<!DOCTYPE html>
<html lang="pl">
	
	<head>
		
		<meta charset="utf-8"/>
		
	</head>
	
	<body>
		
		<form action="index.php" method="post">
			
			<labeL>Apples:  <input type="checkbox" name="fruits[]" value="apples"></label>
			<br>
			<labeL>Oranges:  <input type="checkbox" name="fruits[]" value="oranges"></label>
			<br>
			<labeL>Bananas:  <input type="checkbox" name="fruits[]" value="bananas"></label>
			<br>
			
			<input type="submit">
			
		</form>
		
		<?php
			
			$fruits = $_POST['fruits'];
			
			echo $fruits[1];
			
		?>
		
	</body>
	
</html>