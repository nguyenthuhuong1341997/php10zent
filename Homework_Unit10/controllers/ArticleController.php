<?php 
	/**
	* 
	*/
	include_once 'models/Article.php';
	class ArticleController 
	{
		
		function __construct()
		{
			# code...
			
		}

		function list(){
			

			$article_model = new Article();
			$posts = $article_model->list();
			require_once 'views/article/article.php';
		}

		
	}

 ?>