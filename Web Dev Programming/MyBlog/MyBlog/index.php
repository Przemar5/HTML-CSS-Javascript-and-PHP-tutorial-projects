<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<script src="js/bootstrap.js"></script>
	
	<script src="js/jquery.min.js"></script>

	<style>
		#head{
			background-color: cornflowerblue;
			color: white;
		}
	
	
	</style>
</head>
<body>
	<div class="container-fluid">
		<?php 'conn.php' ?>
		
		<div id="head" class="row">
		<div class="col-xs-6"><h2>MyBlog</h2></div>
		<div class="col-xs-6"></div>
		</div>
		
		<br>
		
		<div id=info>
			
			<h2>Login here</h2>
			
			<form action="login.php" method="post">
			
				<label>Username:
					<input type="text" name="uname" placeholder="User name">
				</label>
				
				<label>Password:
					<input type="text" name="pass" placeholder="Password">
				</label>

				<button style="background-color:#6495ed;color:white;" type="submit"><b>Login</b></button>
				
			</form>
			
			<h2>Signup here</h2>
			
			<form action="signup.php" method="post">
			
				<label>Username:
					<input type="text" name="name" placeholder="User name"><br><br>
				</label>
				
				<label>Password:
					<input type="text" name="pass" placeholder="Password"><br><br>
				</label>
				
				<button style="background-color:#6495ed;color:white;" type="submit"><b>Signup</b></button>
				
			</form>
		
		</div>
		
	</div>
	
</body>

</html>