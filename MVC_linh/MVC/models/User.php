<?php 
	include_once('Connection.php');
	class User
	{
		var $conn;
		function __construct(){
			$object= new Connection();
			$this->conn=$object->conn;
		}
		function list(){
			$query="SELECT * FROM list_user ";
			$result= $this->conn->query($query);
			$users=array();
			while ($row=$result->fetch_assoc())  {
				$users[]=$row;
			}
			return $users;
		}

		function insert($data)
		{
			$query="INSERT INTO list_user(name,email,phone,password,address)
				values('".$data['name']."','".$data['email']."','".$data['phone']."','".sha1($data['password'])."','".$data['address']."')";
			$result= $this->conn->query($query);
			return $result;
		}

		function find($id){
			$query="SELECT * FROM list_user WHERE id= ".$id;
			$result= $this->conn->query($query)->fetch_assoc();
			return $result;
		}
		function update($data,$id)
		{
			$query="UPDATE list_user SET name='".$data['name']."',email='".$data['email']."',phone='".$data['phone']."',address='".$data['address']."' WHERE id=".$id;
			$result= $this->conn->query($query);
			return $result;
		}
		function delete($id)
		{
			$query="DELETE FROM list_user WHERE id=".$id;
			$result= $this->conn->query($query);
			return $result;
		}
	}
?>