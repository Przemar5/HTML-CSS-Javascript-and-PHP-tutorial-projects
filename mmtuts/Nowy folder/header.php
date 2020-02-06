<!DOCTYPE html>
<html lang="pl">
	
	<head>
		
		<meta charset="utf-8">
		
		<title></title>
		
		<link href="css/main.css" rel="stylesheet" type="text/css">
		
	</head>
	
	<body>
		
		<nav>
			
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">About me</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			
			<div>
			
				<form action="includes/login.inc.php" method="post">
					
					<input type="text" name="login" placeholder="Username or E-mail...">
					
					<input type="password" name="password" placeholder="Password...">
					
					<button type="submit" name="login-submit"></button>
					
				</form>
				
				<a href="signup.php">Sign up</a>
				
				<form action="includes/logout.inc.php">
					
					<button type="submit" name="logout-submit">
						Logout
					</button>
					
				</form>
				
			</div>
			
		</nav>
		
		