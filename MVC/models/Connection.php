<?php 
	/**
	* 
	*/
	class Connection
	{
		var $conn;
		
		function __construct()
		{
			# code...
			$servername='localhost';
			$username='root';
			$password='123456';
			$dbname='php10.zent';
			$this->conn= new mysqli($servername, $username, $password, $dbname);
			$this->conn-> set_charset("utf8");
			if ($this->conn->connect_error) {
				# code...
				die("Connection failed: " .$this->conn->connect_error);
			}  
		}
	}
 ?>