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
		
		function registerUsers($username, $password, $email, $ip_address, $time, $date) {
			$sql ='INSERT INTO users (username, password, email, ip_address, reg_date,  reg_time)
					VALUES (?, ?, ?, ?, ?, ?)';
			$query = $this -> link -> prepare($sql);
			$values = array($username, $password, $email, $ip_address, $time, $date);
			$query -> execute($values);
			$counts = $query -> rowCount();
			
			return $counts;
		}
		
		function loginUsers($username, $password) {
			$dsn = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$query = $this -> link -> query($dsn);
			$rowcount = $query -> rowCount();
			
			return $rowcount;
		}
		
		function getUserInfo($username) {
			$dsn = "SELECT * FROM users WHERE username='$username'";
			$query = $this -> link -> query($dsn);
			$rowcount = $query -> rowCount();
			
			if($rowcount == 1) {
				$result = $query -> fetchAll();
				return $result;
			} else {
				return $rowcount;
			}
		}
 	}
	
	$users = new ManageUsers();
//	echo $users -> registerUsers('bob', 'bob', '127.0.0.1', '12:00', '23-07-2012');
	
?>