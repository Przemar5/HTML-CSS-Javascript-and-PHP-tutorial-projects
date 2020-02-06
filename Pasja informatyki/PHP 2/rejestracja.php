<?php
	session_start();
	
	//	Coś nie działa!
	
	if(isset($_POST['email'])) {
		//	Udana walidacja
		$ok = true;
		
		//	Sprawdź nickname'a
		$nick = $_POST['nick'];
		
		//	Sprawdzenie długości nicka
		if((strlen($nick) < 3) || (strlen($nick) > 20)) {
			$ok = false;
			$_SESSION['e_nick'] = 'Nick musi mieć od 3 do 20 znaków!';
		}
		
		//	Weryfikacja znaków niealfanumerycznych
		if(ctype_alnum($nick) == false) {
			$ok = false;
			$_SESSION['e_nick'] = 'Nick może składać się tylko z liter i cyfr (bez polskich znaków)';
		}
		
		//	Sprawdź poprawność e-maila
		$email = $_POST['email'];
		$emailSafe = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if((filter_var($emailSafe, FILTER_VALIDATE_EMAIL) == false) || ($emailSafe != $email)) {
			$ok = false;
			$_SESSION['e_email'] = 'Podaj prawidłowy adres e-mail!';
		}
		
		//	Sprawdź poprawność hasła
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		
		if((strlen($pass1) < 8) || (strlen($pass1) > 20)) {
			$ok = false;
			$_SESSION['e_pass1'] = 'Hasło musi posiadać od 8 do 20 znaków!';
		}
		
		if($pass1 != $pass2) {
			$ok = false;
			$_SESSION['e_pass2'] = 'Podane hasła muszą być identyczne!';
		}
		
		$passHash = password_hash($pass1, PASSWORD_DEFAULT);
		
		//	Sprawdzenie akceptacji regulaminu
		if(!isset($_POST['regulamin'])) {
			$ok = false;
			$_SESSION['e_regulamin'] = 'Potwierdź akceptację regulaminu';
		}
		
		//	Sprawdzenie reCAPTCHA'y
		$secretKey = '6LcN-qoUAAAAAKxDzxqi-YpLrGXrBgfKjmQKgKNx';
		
		$validateKey = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '$response=' . $_POST['g-recaptcha-response']);
		
		$anwser = json_decode($validateKey);
		
		if(!($anwser -> success)) {
			$ok = false;
			$_SESSION['e_captcha'] = 'Potwierdź, że nie jesteś botem';
		}
		
		require_once 'connect.php';
		
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try {
			$connection = new mysqli($host, $dbUser, $dbPassword, $dbName);
			
			if($connection -> connect_errno != 0) {
				throw new Exception(mysqli_connect_errno());
			} else {
				//	Czy email już istnieje
				$result = $connection -> query("SELECT * FROM uzytkownicy WHERE email='$email'");
				
				if(!$result) {
					throw new Exception($connection -> error);
				}
				
				$howManyMails = $result -> num_rows;
				
				if($howManyMails > 0) {
					$ok = false;
					$_SESSION['e_email'] = 'Podany e-mail już jest zajęty!';
				}
				
				//	Czy nick jest już zarejestrowany
				$result = $connection -> query("SELECT * FROM uzytkownicy WHERE user='$nick'");
				
				if(!$result) {
					throw new Exception($connection -> error);
				}
				
				$howManyNicks = $result -> num_rows;
				
				if($howManyNicks > 0) {
					$ok = false;
					$_SESSION['e_nick'] = 'Podany nick jest zajęty!';
				}
				if($ok == true) {
					//	Udało się
					if($connection -> query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$passHash', 'email', 100, 100, 100, 14)")) {
						$_SESSION['regSuccess'] = true;
						header('Location: witamy.php');
					} else {
						throw new Exception($connection -> error);
					}
				}
				
				$connection -> close();
			}
			
		} catch(Exception $e) {
			echo '<span style="color: red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			//echo '<br>Informacja o błędzie: ' . $e;
		}
		
	}
	
?>

<!DCOTYPE html>
<html lanp="pl">
	
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<title>Osadnicy - załóż darmowe konto</title>
		
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		
		<style>
			.error {
				color: red;
				margin-top: 10px;
				margin-bottom: 10px;
			}
		</style>
		
	</head>
	
	<body>
		
		<form method="post">
			
			<div>Nickname: 
			<input type="text" name="nick"></div>
			<?php
				if(isset($_SESSION['e_nick'])) {
					echo '<div class="error">' . $_SESSION['e_nick'] . '</div>';
					unset($_SESSION['e_nick']);
				}
			?>
			
			<div>E-mail: 
			<input type="text" name="email"></div>
			<?php
				if(isset($_SESSION['e_email'])) {
					echo '<div class="error">' . $_SESSION['e_email'] . '</div>';
					unset($_SESSION['e_email']);
				}
			?>
			
			<div>Twoje hasło: 
			<input type="password" name="pass1"></div>
			<?php
				if(isset($_SESSION['e_pass1'])) {
					echo '<div class="error">' . $_SESSION['e_pass1'] . '</div>';
					unset($_SESSION['pass1']);
				}
			?>
			
			<div>Powtórz hasło: 
			<input type="password" name="pass2"></div>
			<?php
				if(isset($_SESSION['e_pass2'])) {
					echo '<div class="error">' . $_SESSION['e_pass2'] . '</div>';
					unset($_SESSION['pass2']);
				}
			?>
			
			<label><input type="checkbox" name="regulamin">Akceptuję rebulamin</label>
			<?php
				if(isset($_SESSION['e_regulamin'])) {
					echo '<div class="error">' . $_SESSION['e_regulamin'] . '</div>';
					unset($_SESSION['e-regulamin']);
				}
			?>
			
			<br>
			<div class="g-recaptcha" data-sitekey="6LcN-qoUAAAAAE8_sTwchC26ZJ1VVd4PPwZYQ_X7
"></div>
			<?php
				if(isset($_SESSION['e_captcha'])) {
					echo '<div class="error">' . $_SESSION['e_captcha'] . '</div>';
					unset($_SESSION['e_captcha']);
				}
			?>
			<br>
			
			<input type="submit" value="Zarejestruj się">
			
		</form>
		
	</body>
	
</html>