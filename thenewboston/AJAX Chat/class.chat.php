<?php
	
	require_once 'config.php';
	require_once 'error_handler.php';
	
	class Chat
	{
		private $mysqli;
		
		//	Constructor - opens db connection
		function __construct() {
			$this -> mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		}
		
		function __destruct() {
			$this -> mysqli -> close();
		}
		
		//	Truncates (empties) the table containing the messages
		public function deleteAllMessages() {
			$query = 'TRUNCATE TABLE chat';
			$result = $this -> mysqli -> query($query);
		}
		
		public function postNewMessage($author, $message, $color) {
			$author = $this -> mysqli -> real_escape_string($author);
			$message = $this -> mysqli -> real_escape_string($message);
			$color = $this -> mysqli -> real_escape_string($color);
			
			$query = 'INSERT INTO chat (posted_on, author, message, color)';
			$query .= ' VALUES (NOW(), 
						"' . $author . '", 
						"' . $message . '", 
						"' . $color . '")';
			$result = $this -> mysqli -> query($query);
		}
		
		//	Get new messages
		public function getNewMessages($id = 0) {
			$id = $this -> mysqli -> real_escape_string($id);
			
			if($id > 0) {
				$query = 'SELECT message_id, author, message, color, DATE_FORMAT(posted_on, "%H:%i:%s")' .
							' AS posted_od FROM chat WHERE message_id > ' . $id .
							' ORDER BY message_id ASC';
			
			} else {
				$query = 'SELECT message_id, author, message, color, posted_on' .
							' FROM (SELECT message_id, author, message, color,' .
							' DATE_FORMAT(posted_on) AS posted_on FROM chat ORDER BY message_id DESC LIMIT 50)' .
							' AS Last50 ORDER BY message_id ASC';
			}
			
			$result = $this -> mysqli -> query($query);
			
			//	XML response
			$response = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
			$response .= '<response>';
			$response .= $this -> isDatabaseCleared($id);
			
			if($result -> num_rows) {
				while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
					$id = $row['message_id'];
					$author = $row['author'];
					$message = $row['message'];
					$time = $row['posted_on'];
					$color = $row['color'];
					$response .= '<id>' . $id . '</id>' .
									'<color>' . $color . '</color>' .
									'<time>' . $time . '</time>' .
									'<name>' . $author . '</name>' .
									'<message>' . $message . '</message>';
									
				}
				$result -> close();
			}
			
			$response .= '</response>';
			return $response;
		}
		
		private function isDatabaseCleared($id) {
			if($id > 0) {
				$check_clear = 'SELECT count(*) old FROM chat WHERE messege_id<=' . $id;
				$result = $this -> mysqli -> query($check_clear);
				$row = $result -> fetch_array(MYSQLI_ASSOC);
			}
			return '<clear>false</clear>';
		}
		
	}
	
?>