<?php
	include_once 'libs/login_users.php';
?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<meta charset="utf-8">
		
		<title>Todo Maker</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Przemek Krogulski">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
		<script>
			$(function() {
				
				$('#show_register').click(function() {
					$('.login_form').hide();
					$('.register_form').show();
					return false;
				});
				
				$('#show_login').click(function() {
					$('.register_form').hide();
					$('.login_form').show();
					return false;
				});
			});
		</script>
		
	</head>
	
	<body>
		
		<div id="mainWrapper">
			
			<!--	Navbar	-->
			
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <a class="navbar-brand" href="#">Navbar</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">Action</a>
					  <a class="dropdown-item" href="#">Another action</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Something else here</a>
					</div>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				  </li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			  </div>
			</nav>
			
			<!--	Content	-->
			
			<div id="content">
				
				<?php
					if(isset($error)) {
						echo '<div class="alert alert-danger">' . $error . '</div>';
					}
				?>
				
				
				<div class="login_form">
						
					<div id="form">
						
						<form action="login.php" method="post">
							
							<h2>Login here</h2>
							
							<div class="form_elements">
								<input type="text" name="login_username">
							</div>
							
							<div class="form_elements">
								<input type="password" name="login_password">
							</div>
							
							<div class="form_elements">
								<button type="submit" class="btn btn-success" name="login">Login</button>
							</div>
							
							<div><a href="#" id="show_register">Do not have an account? Register now!</a></div>
						
						</form>
						
					</div>
				
				</div>
				
				
				<div class="register_form">
						
					<div id="form">
						
						<form action="login.php" method="post">
							
							<h2>Register here</h2>
							
							<div class="form_elements">
								<label for="username">Username: </label>
								<input type="text" name="username" id="username">
							</div>
							
							<div class="form_elements">
								<label for="password">Password: </label>
								<input type="password" name="password" id="password">
							</div>
							
							<div class="form_elements">
								<label for="repassword">Repeat password: </label>
								<input type="password" name="repassword" id="repassword">
							</div>
							
							<div class="form_elements">
								<label for="email">E-mail: </label>
								<input type="email" name="email" id="email">
							</div>
							
							<div class="form_elements">
								<button type="submit" class="btn btn-success" name="register">Submit</button>
							</div>
							
							<div><a href="#" id="show_login">Already have an account? Login here!</a></div>
							
						</form>
						
					</div>
				
				</div>
				
			</div>
			
		</div>
		
	</body>
	
</html>