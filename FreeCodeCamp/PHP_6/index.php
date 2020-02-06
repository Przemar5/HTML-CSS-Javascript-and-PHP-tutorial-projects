<!DOCTYPE html>
<html lang="pl">
	
	<head>
		
		<meta charset="utf-8"/>
		
	</head>
	
	<body>
		
		
		<form action="index.php" method="post">
			
			<labeL>Student:  <input type="text" name="student" value="apples"></label>
			<br>
			<!--<labeL>Grade:  <input type="text" name="grade" value="oranges"></label>
			<br>-->
			
			<input type="submit">
			
		</form>
		
		
		<?php
			
			$grades = array("Ania"=>"4", "Bartek"=>"3", "Celina"=>"2");
			
			echo $grades[$_POST['student']];
			
		?>
		
	</body>
	
</html>