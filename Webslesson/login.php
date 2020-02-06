<?php
	
	include_once('connect.php');
	session_start();
	
	$message = '';
	
	if(isset($_POST['login'])) {
		$sql = 'SELECT * FROM login WHERE usernsme=:username';
		$stmt = $conn -> prepare($sql);
		$stmt -> execute(array(':username' => $_POST['username']));
		$count = $stmt -> rowCount();
		
		if($count > 0) {
			$result = $stmt -> fetchAll();
			
			foreach($result as $row) {
				if(password_verify($_POST['password'], $row['password'])) {
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['username'] = $row['username'];
					$sub_query = "INSERT INTO login_details (user_id) VALUES ('" . $row['user_id'] . "')";
					$stmt = $conn -> prepare($sub_query);
					$stmt -> execute();
					$_SESSION['login_details_id'] = $conn -> lastInsertId();
					
					header('Locatinon: index.php');
				} else {
					$message = '<abel> Wrong Password </label>';
				}
			}
		} else {
			$message = '<label> Wrong Username </label>';
		}
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Chat App using AJAX and jQuery </title>
		<script
		  src="https://code.jquery.com/jquery-3.4.1.min.js"
		  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		  crossorigin="anonymous"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<h3> Chat App </h3>
			<div class="panel panel-default">
				<div class="panel-heading"> Chat App </div>
				<div class="panel-body">
					<p class="text-danger"><?php echo $message; ?></p>
					<form method="post">
						<div class="form-group">
							<label> Enter Username </label>
							<input type="text" class="form-control" name="username" required>
						</div>
						<div class="form-group">
							<label> Enter Password </label>
							<input type="password" class="form-control" name="password" required>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-info" name="login" value="Login">
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>