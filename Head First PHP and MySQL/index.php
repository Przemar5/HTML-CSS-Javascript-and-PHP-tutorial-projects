<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file">
            <input type="submit" name="submit" value="submit">
        </form>
		<textarea rows="30" cols="6" style="margin-top:2rem;"><?php
			echo current(unpack("H*", file_get_contents('pixel.bmp')));
		?></textarea>
    </body>
</html>


<?php
	/*
    ini_set('SMTP', 'smtp.gmail.com');
	ini_set('sendmail_from', 'localhostxxxxxxxxx@gmail.com');
    ini_set('smtp_port', 25);
	ini_set("SMTP", "ssl://smtp.gmail.com");
	ini_set("smtp_port", "465");
	ini_set('smtp_ssl', 'ssl');
	ini_set('default_domain', 'localhost');
	ini_set('error_logfile', 'error.log');
	ini_set('debug_logfile', 'debug.log');
	ini_set('auth_username', 'localhostxxxxxxxxx@gmail.com');
	ini_set('auth_password', '7890-uiop[');
	ini_set('hostname', 'localhost');
    
    $name = htmlspecialchars($_POST['name']);
    
    if(mail('przemar5@o2.pl', 'TEST', "$name", 'From:' . $name)) {
		echo 'DONE';
	} else {
		echo 'UNDONE';
	}
	
	if(!empty($_POST['submit']) && !empty($_FILES['file'])) {
		$file = $_FILES['file'];
		$fileName = $file['tmp_name'];
		$fileDest = 'img/test.img';
		
		//var_dump($file);
		
		//move_uploaded_file($fileName, $fileDest);
		
		echo current(unpack("H*", file_get_contents('pixel.png')));
	}
	*/
	
	
	
	/*
	$photo = $_FILES['file'];
	
	if(!empty($photo['name'])) {
		$fileName = $photo['name'];
		$fileTmpName = $photo['tmp_name'];
		$fileError = $photo['error'];
		$fileSize = $photo['size'];
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpg', 'jpeg', 'png');
		
		if(!in_array($fileActualExt, $allowed)) {
			$_SESSION['errorFileExtProfile'] = 'Invalid file format.';
			$OK = false;
		} else if($fileError) {
			$_SESSION['errorFileExtProfile'] = 'An error occured while uploading file. Try again.';
			$OK = false;
		} else if($fileSize > 90000) {
			$_SESSION['errorFileExtProfile'] = 'Your file is too big.';
			$OK = false;
		} else {
			$fileNameNew = uniqid('', true) . '.' . $fileActualExt;
			$fileDestination = 'img/' . $fileNameNew;
			
			move_uploaded_file($fileTmpName, $fileDestination);
		}
	}
	*/