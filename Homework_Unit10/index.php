<?php 
	if (isset($_GET['mod'])) {
		# code...
		$mod = $_GET['mod'];
	}else{
		$mod ='list_article';
	}

	
	
	switch ($mod) {
		case 'list_user':
			# code...
			include_once 'controllers/UserController.php';
			$user = new UserController();
			$user->list();
			break;
		case 'list_article':
			# code...
			include_once 'controllers/ArticleController.php';
			$article = new ArticleController();
			$article->list();
			
		default:
			# code...
			echo "e";
			break;
	}
 ?>