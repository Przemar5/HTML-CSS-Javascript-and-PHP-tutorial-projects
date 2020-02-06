<?php
	session_start();
	
	if(isset($_SESSION['logged'])) {
		header('Location: hidden.php');
		exit();
	}

	if(isset($_POST['login'])) {
		$conn = new mysqli('localhost', 'root', '', 'ajax_login_tutorial');
		
		$email = $conn -> real_escape_string($_POST['email']);
		$password = md5($conn -> real_escape_string($_POST['password']));
		
		$data = $conn -> query("SELECT id FROM users WHERE email='$email' AND password='$password'");
		if(!$data) {
			exit('<font color="red">Please check your inputs</font>');
		} else {
			$_SESSION['logged'] = 1;
			$_SESSION['email'] = $email;
			exit('<font color="green">Login success</font>');
		}
		
		exit($email . ' = ' . $password);
	}
?>

<html>
	<head>
		<title>jQuery Tutorialm - Login Form</title>
	</head>
	<body>
		<form action="login.php" method="post">
			<input type="text" id="email" placeholder="e-mail">
			<input type="password" id="password" placeholder="password">
			<input type="button" id="login" value="Log In">
		</form>
		
		<p id="response"></p>
		
		<script
		  src="https://code.jquery.com/jquery-3.4.1.min.js"
		  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		  crossorigin="anonymous"></script>
		<script>
			$(document).ready(function() {
				$('#login').on('click', function() {
					var email = $('#email').val();
					var password = $('#password').val();
					
					if(email == '' || password == '') {
						alert('Please check your inputs');
					} else {
						$.ajax({
							url:	'login.php',
							method: 'POST',
							data: {
								login: 1,
								email: email,
								password: password
							},
							success: function(data) {
								$('#response').html(data);
								
								if(data.indexOf('pass') >= 0) {
									window.location = 'hidden.php';
								}
							},
							dataType: 'text'
						});
					}
				});
			});
		</script>
	</body>
</html>