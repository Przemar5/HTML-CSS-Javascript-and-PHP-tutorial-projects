<?php
	
	session_start();
	
	include_once 'db.php';
	
?>


<!DOCTYPE html>
<html>
	
	<head>
	
		<title>Blog</title>
		
	</head>
	
	<body>
		
		<?php
			require_once 'nbbc/nbbc.php';
			
			$bbcode = new BBCode;
			
			$sql = 'SELECT * FROM posts ORDER BY id DESC';
			$result = mysqli_query($conn, $sql) or die(mysqli_error());
			$posts = '';
			
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					$title = $row['title'];
					$content = $row['content'];
					$date = $row['date'];
					
					$output = $bbcode -> Parse($content);
					$posts .= "<div>h2><a href='view_post.php?pid=$id'>$title</a></h2><h3>$date</h3><p>$output</p>$admin<hr></div>";
				}
				
				echo $posts;
				
			} else {
				echo 'There are no posts to display!';
			}
			
			if((isset($_SESSION['admin'])) && ($_SESSION['admin'] == 1)) {
				echo "<a href='admin.php'>Admin</a> | <a href='logout.php'>Logout</a>";
			}
			
			if(!isset($_SESSION['username'])) {
				echo "<a href='login.php'>Login</a>";
			}
			
			if(isset($_SESSION['username'])) {
				echo "<a href='logout.php'>Logout</a>";
			}
			
		?>
		
		<a href="post.php">Post</a>
		
	</body>
	
</html>