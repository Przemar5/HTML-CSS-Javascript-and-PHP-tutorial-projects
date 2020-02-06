<!DOCTYPE html>
<html lang="pl">

	<head>
		
		<meta charset="utf-8"/>
		
		<style>
			
			.przerywnik {
				height: 40px;
			}
			
			.formularz {
				background-color: yellow;
				color: #330033;
				margin-left: 20px;
				margin-right: 20px;
				padding-left: 15px;
				padding-right: 15px;
			}
			
			.input_field {
				height: 26px;
			}
			
			.submit {
				color: #330033;
			}
			
		</style>
		
	</head>
	
	<body>
		
<?php
	
	$zmienna = "Hello world!";
	echo '$zmienna = ' . $zmienna . "<br>";
	
	echo 'Funkcja "strtolower" zwraca: ' . strtolower($zmienna) . "<br>";
	echo 'Funkcja "strtoupper" zwraca: ' . strtoupper($zmienna) . "<br>";
	echo 'Funkcja "strlen" zwraca: ' . strlen($zmienna) . "<br>";
	echo '<br>';
	
	echo '$zmienna[0] = ' . $zmienna[0] . "<br>";
	$zmienna[0] = "B";
	echo '$zmienna[0] = "B"<br>';
	echo 'Teraz zmienna = ' . $zmienna . '<br>';
	echo '<br>';
	
	str_replace("ll", "LLLs", $zmienna);
	echo 'Po zastosowaniu funkcji "str_replace("l", "L", $zmienna)" $zmienna = ' . $zmienna . '<br>';
	echo 'Funkcja "substr($zmienna, 4, 3)" zwraca: ' . substr($zmienna, 4, 3) . '<br>';
	
	echo "<hr><br>";
	//	ZMIENNE
	
	$num = 10;
	$num +=  10;
	echo $num . "<br>";
	
?>
		<div class="przerywnik"></div>
		
		<fieldset class="formularz">
			
			<legend>Formularz</legend>
			
			<form action="index.php" method="get">
				
				<div class="input_field">
					
					<label>
						
						<span class="input_field_description">Podaj swoje imię:</span>
						
						<input type="text" name="name">
						
					</label>
					
				</div>
				
				<div class="input_field">
					
					<label class="input_field">
						
						<span class="input_field_description">Podaj swój wiek:</span>
						
						<input type="number" name="age">
					
					</label>
					
				</div>
				
				<input type="submit" class="submit">
				
			</form>
			
		</fieldset>
		
<?php
	
	echo 'Nazywasz się ' . $_GET["name"] . '.';
	echo '<br>';
	echo 'Masz ' . $_GET["age"] . ' lat.';
?>
		
		<div class="przerywnik"></div>
		
		<form action="index.php" method="get">
			
			<span><input type="number" name="num1"></span>
			
			<span><input type="number" name="num2"></span>
			
			<span><input type="submit"></span>
			
		</form>
		
		<?php
			
			echo $_GET["num1"] + $_GET["num2"] . '<br>';
			echo '<hr><br>';
		?>
		
	</body>

</html>

