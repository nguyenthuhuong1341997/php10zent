<?php 
	include_once 'Connection.php';
	class UserNotLogin{
		var $user_conn;
		function __construct(){
			$object= new Connection();
			$this->user_conn = $object->conn;			
		}
		function list(){
			$query="SELECT * FROM news;";

			$result= $this->user_conn->query($query);
			$data = array();
			while ($row=$result->fetch_assoc()) {
				$data[]= $row;
			}
			return $data;
		}
		
		function find(){
			$id=$_GET['id'];
			$query="SELECT * FROM news WHERE id= " .$id;
			// $id=mysqli_real_escape_string($this->user_conn,$_GET['id']);
			// $query = sprintf("SELECT * FROM news WHERE id= '%s'",$id);
			if ($this->user_conn->multi_query($query)) {
				# code...
				do{
					$result= $this->user_conn->store_result()->fetch_assoc();
					return $result;
				}while($this->user_conn->next_result());
			}
			
		}

		function check($email,$pass){
			$query="SELECT * FROM user WHERE email='".$email."' AND password='".$pass."'";
			$result= $this->user_conn->query($query)->fetch_assoc();
			return $result;
		}

		function insert($data)
		{
			
			$query="INSERT INTO user(name,email,password,address,type)
				values('".$data['name']."','".$data['email']."','".md5($data['password'])."','".$data['address']."','".$data['type']."')";

			$result= $this->user_conn->query($query);
			return $result;
		}
		
	}
 ?>