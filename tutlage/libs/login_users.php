<?php
	session_start();

	if(isset($_POST['register'])) {
		include_once 'classes/class.ManageUsers.php';
		$user = new ManageUsers();
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$email = $_POST['email'];
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$date = date("Y-m-d");
		$time = date("H:i:s");
		
		if(empty($username) || empty($password) ||  empty($repassword) || empty($email)) {
			$error = 'All fields are required';
		} elseif($password !== $repassword) {
			$error = 'Passwords must be equal';
		} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error = 'Email is not valid';
		} else {
			$check_availability = $user -> getUserInfo($username);
			
			if($check_availability == 0) {
				$password = password_hash($password, PASSWORD_DEFAULT);
				//$password = md5($password);
				$register_user = $user -> registerUsers($username, $password, $email, $ip_address, $time, $date);
				
				if($register_user == 1) {
					$make_sessions = $user -> getUserInfo($username);
					
					foreach($make_sessions as $userSessions) {
						$_SESSION['todo_name'] = $userSessions['username'];
						
						if(isset($_SESSIO['todo_name'])) {
							header('Location: index.php');
							exit();
						}
					}
				}
			} else {
				$error = 'Given username already exists';
			}
		}
	}
	
	if((isset($_POST['login_username'])) && (isset($_POST['login_password']))) {
		include_once 'classes/class.ManageUsers.php';
		
		$username = $_POST['login_username'];
		$password = $_POST['login_password'];
		
		if((empty($username)) || (empty($password))) {
			$error = 'All fields are required';
		} else {
//			$password = password_hash($password, PASSWORD_DEFAULT);
			$login_users = new ManageUsers();
			$auth_user = $login_users -> loginUsers($username, $password);
			
			if($auth_user == 1) {
				$make_session = $login_users -> getUserInfo($username);
				
				foreach($make_session as $userSessions) {
					$_SESSION['todo_name'] = $userSessions['username'];
					
					if(isset($_SESSION['todo_name'])) {
						header('Location: index.php');
						exit();
					}
				}
			} else {
				$error = 'Invalid Credentials';
			}
		}
	}
?>