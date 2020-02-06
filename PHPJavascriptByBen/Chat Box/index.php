<?php
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<title>Chat Box</title>
	</head>
	<body>
		<form name="form1" id="form1">
			Enter Your Chatname: <input type="text" name="uname"/><br/>
			Your Message: <br/>
			<textarea name="msg"></textarea><br/>
			<a href="#" onclick="">Send</a><br/>
		</form>
		<div id="chatlogs">
			LOADING CHATLOGS PLEASE WAIT...
		</div>
		<script src="js/main.js"></script>
	</body>
</html>