<?php
	
	require_once 'class.chat.php';
	
	$mode = $_POST['mode'];
	$id = 0;
	$chat = new Chat();
	
	if($mode == 'SendAndRetrieveNew') {
		$name = $_POST['name'];
		$message = $_POST['message'];
		$color = $_POST['color'];
		$id = $_POST['id'];
		
		if(empty($name) || empty($message) || empty($color)) {
			$chat -> postNewMessage($name, $message, $color);
		}
		
	} else if($mode == 'DeleteAndRetrieveNew') {
		$chat -> deleteAllMessages();
		
	} else if($mode == 'RetrieveNew') {
		$name = $_POST['name'];
		$message = $_POST['message'];
		$color = $_POST['color'];
		$id = $_POST['id'];
		
		if(empty($name) || empty($message) || empty($color)) {
			$chat -> postNewMessage($name, $message, $color);
		}
	}
	
	if(ob_get_length()) {
		ob_clean();
	}
	
	//	Headers are sent to prevent browsers from caching
	header('Cache-Control: no-cache, must-revaidate');
	header('Pragma: no-cache');
	header('Content-Type: text/xml');
	
	echo $chat -> getNewMessages($id);
	
?>