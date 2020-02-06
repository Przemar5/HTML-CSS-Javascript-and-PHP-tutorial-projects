<!DOCTYPE html>
<html lang="pl">
	
	<head>
		
		<meta charset="utf-8"/>
		
	</head>
	
	<body>
		
		<form action="index.php" method="post">
			
			<labeL>Number 1:  <input type="number" name="num1"></label>
			<br>
			<labeL>Number 2:  <input type="number" name="num2"></label>
			<br>
			<labeL>Operation:  <input type="text" name="sign"></label>
			<br>
			
			<input type="submit">
			
		</form>
		
		<?php
			
			function calc($num1, $num2, $sign) {
				switch($sign) {
					case "+":
						return $num1 + $num2;
						break;
					case "-":
						return $num1 - $num2;
						break;
					case "*":
						return $num1 * $num2;
						break;
					case "/":
						return $num1 / $num2;
						break;
					case "mod":
					case "modulo":
					case "%":
						return $num1 % $num2;
						break;
					default:
						return "Invalid operation";
						break;
				}
			}
			
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$sign = $_POST['sign'];
			
			echo calc($num1, $num2, $sign);
		?>
		
	</body>
	
</html>