<?php 
	include_once 'Connection.php';
	class User{
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
		function find($id){
			$query="SELECT * FROM news WHERE id= " .$id;
			$result= $this->user_conn->query($query)->fetch_assoc();

			return $result;
		}

		function update($data,$id)
		{
			$query="UPDATE user SET name='".$data['name']."',email='".$data['email']."',type='".$data['type']."',address='".$data['address']."' WHERE id=".$id;
			$result= $this->user_conn->query($query);
			return $result;
		}
		
	}
 ?>