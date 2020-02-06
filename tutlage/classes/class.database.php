<?php
	
	class dbConnection 
	{
		protected $db_conn;
		public $db_host = 'localhost';
		public $db_user = 'root';
		public $db_pass = '';
		public $db_name = 'todo';
		
		function connect() {
			try {
				$dsn = 'mysql:host=' . $this -> db_host . ';dbname=' . $this -> db_name;
				$this -> db_conn = new PDO($dsn, $this -> db_user, $this -> db_pass);
				return $this -> db_conn;
			} catch (PDOException $e) {
				return $e -> getMessage();
			}
		}
	}
	
?>