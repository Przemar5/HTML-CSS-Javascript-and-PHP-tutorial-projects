<?php
	/*
	$uname = $_REQUEST['uname'];
	$msg = $_REQUEST['msg'];
	
	$dsn = 'mysql:host=localhost;dbname=chatbox';
	$conn = new PDO($dsn, 'root', '');
	$connection -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$connection -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	$query = "INSERT INTO logs (`username`, `msg`) VALUES (`:uname`, `:msg`);";
	$stmt = $conn -> prepare($query);
	$stmt -> execute([	'uname':	$uname,
						'msg':		$msg	]);
	$logs = $stmt -> fetchAll();
	
	foreach($logs as $log) {
		echo $log['username'] . ': ' . $log['msg'] . '<br>';
	}
	*/
	
	$uname = $_REQUEST['uname'];
	$msg = $_REQUEST['msg'];
	$conn = mysqli_connect('localhost', 'root', '');
	mysqli_select_db('chatbox', $conn);
	mysqli_query("INSERT INTO logs (`username`, `msg`) VALUES ('$uname', '$msg');");
	$result1 = $mysqli_query('SELECT * FROM logs ORDER BY id DESC');
	
	while($extract = mysqli_fetch_array($result1)) {
		echo $extract['username'] . ': ' . $extract['msg'] . '<br>';
	}
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
		<form name="form1">
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