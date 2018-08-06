<?php 
	/**
	* 
	*/
	include_once 'Connection.php';
	class User{
		var $user_conn;
		
		function __construct()
		{
			$object= new Connection();
			$this->user_conn = $object->conn;
		}

		function list(){
			$query="SELECT * FROM user;";

			$result= $this->user_conn->query($query);
			$data = array();
			while ($row=$result->fetch_assoc()) {
				$data[]= $row;
			}
			return $data;
		}
		function insert($data){
			$query= "INSERT INTO user(name, password, address) VALUES('".$data['name']."','".$data['password']."','".$data['address']."')";
			$result= $this->user_conn->query($query);
			return $result;
		}

		function find($id){
			$query ="SELECT * FROM user WHERE id= " .$id;
			$result =$this->user_conn->query($query)->fetch_assoc();
			return $result;
		}

		function update($data, $id){
			$query="UPDATE user SET name='".$data['name']."', password='".md5($data['password'])."', address='".$data['address']."'
			WHERE id= " .$id;
			$result= $this->user_conn->query($query);

				return $result;
		}
		function delete($id){
			$query="DELETE FROM user WHERE id=" .$id;
			$result= $this->user_conn->query($query);
			return $result;
		}
	}

 ?>