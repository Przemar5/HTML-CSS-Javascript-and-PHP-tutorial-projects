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
		
		<script src=""></script>
		
	</head>
	
	<body>
		
		<div id="mainWrapper">
			
			<div id="td_container">
				
				<a href="index.php" class="brand"> Todo Maker </a>
				
				<div id="sidebar">
				
					<ul class="nav nav-list">
						
						<li>
							<a href="#"><i class="icon-book"> Inbox </a>
						</li>
						
						<li>
							<a href="#"><i class="icon-book"> Read later </a>
						</li>
						
						<li>
							<a href="#"><i class="icon-book"> Important </a>
						</li>
						
					</ul>
				
				</div>
				
				<?php
					include_once 'statics/header.php'; 
				?>
				
				<div id="mainContent" class="clearfix">
					
					<div id="head">
						
						<h2>Manage Todo</h2>
						
						<div id="add_more">
							<a href="add_new.php" class="btn btn-success"> + Add New </a>
						</div>
						
					</div>
					
					<div id="mainBody">
						
						<table class="table table-striped">
							
							<thead>
								
								<tr>
									<td>Title</td>
									<td>Snippet</td>
									<td>Due Date</td>
									<td>Time Left</td>
									<td>Progress</td>
									<td>Actions</td>
								</tr>
							
							</thead>
							
							<tbody>
								
								<tr>
									<td>Todo</td>
									<td>Should complete it</td>
									<td>2019-07-24</td>
									<td>18 hours</td>
									<td class="align-items-baseline">
										<div class="progress bg-dark">
											<div class="progress-bar progress-bar-striped bg-primary" style="width:70%;"></div>
										</div>
									</td>
									<td>edit | delete</td>
								</tr>
								
							</tbody>
							
						</table>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</body>
	
</html>