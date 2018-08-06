<?php 
	/**
	* 
	*/
	class Post 
	{
		
		function __construct()
		{
			# code...

		}
		function list(){

			$servername="localhost";
			$username="root";
			$password="123456";
			$dbname="php10.zent";
			$conn= new mysqli($servername, $username, $password, $dbname);

			$conn-> set_charset("utf8");
			if ($conn->connect_error) {
				# code...
				die("Connection failed: " .$conn->connect_error);
			}  
			$query="SELECT * FROM news;";

			$result= $conn->query($query);
			$data = array();
			while ($row=$result->fetch_assoc()) {
				$data[]= $row;
			}
			return $data;
		}
	}

 ?>