<?php
	
	session_start();
	include_once 'db.php';
	
	if(!isset($_SESSION['username'])) {
		header('Location: login.php');
		return;
	}
	
	if(!isset($_GET['pid'])) {
		header('Location: index.php');
		return;
	}
	
	$pid = $_GET['pid'];
	
	if(isset($_POST['update'])) {
		$title = strip_tags($_POST['title']);
		$content = strip_tags($_POST['content']);
		
		$title = mysqli_real_escape_string($conn, $title);
		$content = mysqli_real_escape_string($conn, $content);
		
		$date = date('l jS \of F Y h:i:s A');
		
		$sql = "UPDATE posts SET title='$title', content='$content', date='$date' WHERE id='$pid'";
		
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
	
		<title>Blog - Post</title>
		
	</head>
	
	<body>
		
		<?php
			
			$sql_get = "SELECT * FROM posts WHERE id='$pid' LIMIT 1";
			$result = mysqli_query($conn, $sql_get);
			
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$title = $row['title'];
					$content = $row['content'];
				}
			}
		?>
		
		<form action="edit_post.php?pid=<?php echo $pid; ?>" method="post" enctype="multipart/form-data">
			
			<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title" size="48" autofocus><br><br>
			
			<textarea name="content" placeholder="Content" rows="20" cols="50"><?php echo $content ?></textarea><br>
			
			<input type="submit" name="update" value="Update">
			
		</form>
		
	</body>
	
</html>