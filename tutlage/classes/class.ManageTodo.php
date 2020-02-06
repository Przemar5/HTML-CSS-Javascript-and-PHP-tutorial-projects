<?php

	include_once 'class.database.php';
		
	class ManageUsers
	{
		public $link;
		
		function __construct() {
			$db_connection = new dbConnection();
			$this -> link = $db_connection -> connect();
			return $this -> link;
		}
		
		function createTodo($username, $title, $description, $due_date, $created_on, $status) {
			$dsn = 'INSERT INTO todo (username, title, description, due_date, created_date, status)
					VALUES (?, ?, ?, ?, ?, ?)';
			$values = array($username, $title, $description, $due_date, $created_on, $status);
			$query = $this -> link -> prepare($dsn);
			$query -> execute($values);
			$counts = $query -> rowCount();
		}
		
		function listTodo($username, $status) {
			$dsn = "SELECT * FROM todo WHERE username = '$username' AND status = '$status'";
			$query = $this -> link -> query($dsn);
			$counts = $query -> rowCount();
			
			if($counts >= 1) {
				$result = $query -> fetchAll();
			} else {
				$result = $counts;
			}
			
			return $result;
		}
		
		function countTodo($username, $status) {
			$dsn = "SELECT count (*) AS TOTAL_TODO FROM todo WHERE username = '$username' AND status = '$status'";
			$query = $this -> link -> query($dsn);
			$query -> setFetchMode(PDO::FETCH_OBJ);
			$counts = $query -> fetchAll();
			
			return $counts;
		}
		
		function editTodo($username, $id, $values) {
			$x = 0;
			
			foreach($values as $key => $value) {
				$dsn = "UPDATE todoSET $key = '$value' WHERE username = '$username' AND id = '$id'";
				$query = $this -> link -> query($dsn);
				$x++;
			}
			
			return $x;
		}
		
		function deleteTodo($username, $id) {
			$dsn = "DELETE FROM todo WHERE username = '$username' AND id = '$id' LIMIT 1";
			$query = $this -> link -> query($dsn);
			$counts = $query -> rowCount();
			
			return $counts;
		}
	}	
?>