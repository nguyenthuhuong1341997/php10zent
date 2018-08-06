<?php 
	/**
	* 
	*/
	include_once 'models/Article.php';
	class ArticleController 
	{
		var $article_model ;
		function __construct()
		{
			# code...
			$this->article_model= new Article();
		}

		function list(){
			$posts = $this->article_model->list();
			require_once 'views/article/article.php';
		}
		function add(){
			require_once 'views/article/add.php';
		}

		function store(){
			$data = $_POST;
			$status = $this->article_model->insert($data);
			if ($status==1) {
				# code...
				setcookie('msg','Thêm mới thành công', time()+10);
			} else {
				# code...
				setcookie('msg','Thêm không mới thành công', time()+10);
			}
			header('Location: ?mod=article&act=list');
			
		}
		function detail(){
			$id= $_GET['id'];
			$status = $this->article_model->find($id);
			require_once 'views/article/detail.php';
		}
		function edit(){
			$id= $_GET['id'];
			$status = $this->article_model->find($id);
			require_once 'views/article/edit.php';
		}

		function update(){
			$data = $_POST;
			$id= $_GET['id'];
			

			$status = $this->article_model->update($data,$id);
			if ($status==1) {
				# code...
				setcookie('msg','Thêm mới thành công', time()+10);
			} else {
				# code...
				setcookie('msg','Thêm không mới thành công', time()+10);
			}
			header('Location: ?mod=article');
		}

		function delete(){
			
			$id= $_GET['id'];
			

			$status = $this->article_model->delete($id);
			if ($status==1) {
				# code...
				setcookie('msg','Xóa thành công', time()+10);
			} else {
				# code...
				setcookie('msg','Xóa không thành công', time()+10);
			}
			header('Location: ?mod=article');
		}
	}

 ?>