<?php 
	include_once('models/Post.php');
	class PostController
	{
		var $posts_model;
		function __construct()
		{
			$this->posts_model= new Post();
		}
		function list(){
			// Hiển thị danh sách bài viết
			$posts = $this->posts_model->list();
			require_once('views/post/list.php');
		}
		function add(){
			// Thêm bài viết
			require_once('views/post/add.php');
		}
		function store(){
			$data=$_POST;
			$status=$this->posts_model->insert($data);
			if ($status==1) {
				setcookie('msg','Thêm mới thành công',time()+5);
			} else {
				setcookie('msg','Thêm mới không thành công',time()+5);
			}
			header('Location:?mod=post');
		}
		function edit(){
			$id=$_GET['id'];
			$post=$this->posts_model->find($id);
			require_once('views/post/edit.php');
		}
		function delete(){
			$id=$_GET['id'];
			$post=$this->posts_model->delete($id);
			if ($post==1) {
				setcookie('msg','Xóa thành công',time()+5);
			} else {
				setcookie('msg','Xóa không thành công',time()+5);
			}
			header('Location:?mod=post');
		}
		function update(){
			$data=$_POST;
			$id=$_GET['id'];
			$status=$this->posts_model->update($data,$id);
			if ($status==1) {
				setcookie('msg','Cập nhật thành công',time()+5);
			} else {
				setcookie('msg','Cập nhật không thành công',time()+5);
			}
			header('Location:?mod=post');
		}
		function detail(){
			$id=$_GET['id'];
			$post=$this->posts_model->find($id);
			require_once('views/post/detail.php');
		}
	}
?>