<!DOCTYPE html>
<html lang="pl">
	
	<head>
		
		<meta charset="utf-8"/>
		
	</head>
	
	<body>
		
		<main>
			
			<div class="form">
				
				<form action="index.php" method="get">
					
					<input type="text" name="color1"><br>
					<input type="text" name="color2"><br>
					<input type="text" name="person"><br>
					
					<input type="submit">
					
				</form>
				
			</div>
			
		</main>
		
		<div class="anwser">
			
			<?php
				
				$color1 = $_GET['color1'];
				$color2 = $_GET['color2'];
				$person = $_GET['person'];
				
				echo "Roses are $color1" . "<br>";
				echo "Violets are $color2" . "<br>";
				echo "I love $person" . "<br>";
				
			?>
			
		</div>
		
	</body>
	
</html>