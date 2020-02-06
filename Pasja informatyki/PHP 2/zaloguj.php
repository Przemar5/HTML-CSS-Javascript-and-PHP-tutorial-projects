<?php
	
	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['pass']))) {
		header('Locatin: index.php');
		exit();
	}
	
	require_once 'connect.php';
	
	try {
		$connection = new mysqli($host, $dbUser, $dbPassword, $dbName);
		
		if($connection -> connect_errno != 0) {
			echo 'Error: ' . $connection -> connect_errno;
		} else {
			
			$login = $_POST['login'];
			$pass = $_POST['pass'];
			
			$login = htmlentities($login, ENT_QUOTES, 'utf-8');
			
			$sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$pass'";
			
			if($result = @$connection -> query(sprintf("SELECT * FROM uzytkownicy WHERE user='%s'",
				mysqli_real_escape_string($connection, $login)))) {
					
				$numberOfUsers = $result -> num_rows;
				
				if($numberOfUsers > 0) {
					$row = $result -> fetch_assoc();
					
					if(password_verify($pass, $row['pass'])) {
						$_SESSION['logged'] = true;
						$_SESSION['id'] = $row['id'];
						$_SESSION['user'] = $row['user'];
						$_SESSION['drewno'] = $row['drewno'];
						$_SESSION['kamien'] = $row['kamien'];
						$_SESSION['zboze'] = $row['zboze'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['dnipremium'] = $row['dnipremium'];
						
						unset($_SESSION['error']);
						$result -> free_result();	
						
						header('Location: gra.php');
					} else {
						$_SESSION['error'] = '<span style="color: red">Nieprawidłowy login lub hasło!</span>';
						header('Location: index.php');
					}
				} else {
					$_SESSION['error'] = '<span style="color: red">Nieprawidłowy login lub hasło!</span>';
					header('Location: index.php');
				}
			}
			
			$connection -> close();
		}
	} catch(Exception $e) {
		echo '<span style="color: red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
		//echo '<br>Informacja o błędzie: ' . $e;
	}
	
?>