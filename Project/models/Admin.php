<?php 
	include_once 'Connection.php';
	class Admin{
		var $admin_conn;
		function __construct(){
			$object= new Connection();
			$this->admin_conn = $object->conn;			
		}
		function list(){
			$query="SELECT * FROM user;";

			$result= $this->admin_conn->query($query);
			$data = array();
			while ($row=$result->fetch_assoc()) {
				$data[]= $row;
			}
			return $data;
		}
		function find($id){
			$query="SELECT * FROM user WHERE id= " .$id;
			$result= $this->admin_conn->query($query)->fetch_assoc();

			return $result;
		}
		function insert($data)
		{
			
			$query="INSERT INTO user(name,email,password,address,type)
				values('".$data['name']."','".$data['email']."','".md5($data['password'])."','".$data['address']."','".$data['type']."')";

			$result= $this->admin_conn->query($query);
			return $result;
		}
		
		function update($data,$id)
		{
			$query="UPDATE user SET name='".$data['name']."',email='".$data['email']."',type='".$data['type']."',address='".$data['address']."',password='".$data['password']."' WHERE id=".$id;
			$result= $this->admin_conn->query($query);
			return $result;
		}
		function delete($id)
		{
			$query="DELETE FROM user WHERE id=".$id;
			$result= $this->admin_conn->query($query);
			return $result;
		}
		
		function list_post(){
			$query="SELECT * FROM news;";

			$result= $this->admin_conn->query($query);
			$data = array();
			while ($row=$result->fetch_assoc()) {
				$data[]= $row;
			}
			return $data;
		}
		function find_post($id){
			$query="SELECT * FROM news WHERE id= " .$id;
			$result= $this->admin_conn->query($query)->fetch_assoc();

			return $result;
		}
		function insert_post($data)
		{
			
			$query="INSERT INTO news(title,short_content,contents,image,date_public,author)
				values('".$data['title']."','".$data['short_content']."','".$data['contents']."','".$data['image']."','".date('Y-m-d H:i:s')."','".$data['author']."')";
			echo "$query";
			$result= $this->admin_conn->query($query);
			return $result;
		}
		
		function update_post($data,$id)
		{
			$query="UPDATE news SET title='".$data['title']."',short_content='".$data['short_content']."',contents='".$data['contents']."',image='".$data['image']."',author='".$data['author']."' WHERE id=".$id;
			echo "$query";
			$result= $this->admin_conn->query($query);
			return $result;
		}
		function delete_post($id)
		{
			$query="DELETE FROM news WHERE id=".$id;
			$result= $this->admin_conn->query($query);
			return $result;
		}
	}
 ?>