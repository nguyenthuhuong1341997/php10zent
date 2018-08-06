<?php 
	/**
	* 
	*/
	include_once 'Connection.php';
	class Article{
		
		var $article_conn;
		function __construct()
		{
			$object= new Connection();
			$this->article_conn = $object->conn;

			
		}

		function list(){

			
			$query="SELECT * FROM news;";

			$result= $this->article_conn->query($query);
			$data = array();
			while ($row=$result->fetch_assoc()) {
				$data[]= $row;
			}
			return $data;
		}
		function find($id){
			$query="SELECT * FROM news WHERE id= " .$id;
			$result= $this->article_conn->query($query)->fetch_assoc();

			return $result;
		}

		function insert($data){
			$query="INSERT INTO news(title,short_content,contents,image,date_public,author)
				values('".$data['title']."','".$data['short_content']."','".$data['contents']."','".$data['image']."','".date('Y-m-d H:i:s')."','".$data['author']."')";
				
				$result= $this->article_conn->query($query);

				return $result;
		}

		function delete($id){
			$query="DELETE FROM news WHERE id=".$id;
			$result= $this->article_conn->query($query);

			return $result;
		}

		function update($data, $id){
			$query="UPDATE news SET title='".$data['title']."', short_content='".$data['short_content']."', contents='".$data['contents']."', image='".$data['image']."', author='".$data['author']."'
			WHERE id= " .$id;
			$result= $this->article_conn->query($query);

				return $result;
		}
	}

 ?>