<?php 
	/**
	* 
	*/
	include_once 'models/Post.php';
	class PostController 
	{
		
		function __construct()
		{
			# code...
			echo "Quản lí bài viết";
		}

		function list(){
			

			$post_model = new Post();
			$posts = $post_model->list();
			require_once 'views/post/list.php';
		}

		function add(){
			require_once 'views/post/add.php';
		}
	}

 ?>