<?php
	include_once 'statics/header.php';
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
		
		
	</head>
	
	<body>

		<div id="mainContent">
			
			<div id="head">
				<h2>Create Todo</h2>
			</div>
			
			<div id="mainBody">
				
				<div class="form_field">
					<label for="title">Title</label>
					<input type="text" name="title" id="title">
				</div>
				
				<div class="form_field">
					<label for="desc">Description</label>
					<textarea name="desc" id="desc"></textarea>
				</div>
				
				<div class="form_field">
					<label for="due_date">Due Date</label>
					<input type="text" name="due_date" id="due_date">
				</div>
				
				<div class="form_field">
					<label for="due_date">Label Under</label>
					<select name="label_under" id="label_under">
						<option value="">Select</option>
						<option value="Inbox">Inbox</option>
						<option value="Read Later">Read Later</option>
						<option value="Important">Important</option>
					</select>
				</div>
				
				<div class="form_field">
					<input type="submit" class="btn btn-success" name="create_todo" id="create_todo" value="Create">
				</div>
				
			</div>
			
		</div>

	</body>
	
</html>