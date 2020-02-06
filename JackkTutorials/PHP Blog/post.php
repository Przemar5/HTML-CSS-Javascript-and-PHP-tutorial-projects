<?php
	
	session_start();
	include_once 'db.php';
	
	if(isset($_POST['post'])) {
		$title = strip_tags($_POST['title']);
		$content = strip_tags($_POST['content']);
		
		$title = mysqli_real_escape_string($conn, $title);
		$content = mysqli_real_escape_string($conn, $content);
		
		$date = date('l jS \of F Y h:i:s A');
		
		$sql = "INSERT INTO posts (title, content, date) VALUES ('$title', '$content', '$date')";
		
		if($title == '' || $content == '') {
			echo 'Please complete your post!';
			return;
		}
		
		mysqli_query($conn, $sql);
		
		header('Location: index.php');
	}
	
?>


<!DOCTYPE html>
<html>
	
	<head>
	
		<title>Blog</title>
		
	</head>
	
	<body>
		
		<form action="post.php" method="post" enctype="multipart/form-data">
			
			<input type="text" name="title" placeholder="Title" size="48" autofocus><br><br>
			
			<textarea name="content" placeholder="Content" rows="20" cols="50"></textarea><br>
			
			<input type="submit" name="post" value="Post">
			
		</form>
		
	</body>
	
</html>