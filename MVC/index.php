<?php 
	if (isset($_GET['mod'])) {
		# code...
		$mod = $_GET['mod'];
	}else{
		$mod ='article';
	}
	if (isset($_GET['act'])) {
		# code...
		$act= $_GET['act'];
	} else {
		# code...
		$act='index';
	}

	
	
	switch ($mod) {
		case 'list_user':
			# code...
			include_once 'controllers/UserController.php';
			$user = new UserController();
			switch ($act) {
				case 'list':
					# code...
					$user->list();
					break;
				case 'add':
					# code...
					$user->add();
					break;
				case 'store':
					# code...
					$user->store();
					break;
				case 'detail':
					# code...
					$user->detail();
					break;
				case 'edit':
					# code...
					$user->edit();
					break;
				case 'update':
					# code...
					$user->update();
					break;
				case 'delete':
					# code...
					$user->delete();
					break;
				default:
					# code...
					$user->list();
					break;
			}
			break;
		case 'article':
			# code...
			include_once 'controllers/ArticleController.php';
			$article = new ArticleController();
			
			switch ($act) {
				case 'list':
					# code...
					$article->list();
					break;
				case 'add':
					# code...
					$article->add();
					break;
				case 'store':
					# code...
					$article->store();
					break;
				case 'detail':
					# code...
					$article->detail();
					break;
				case 'edit':
					# code...
					$article->edit();
					break;
				case 'update':
					# code...
					$article->update();
					break;
				case 'delete':
					# code...
					$article->delete();
					break;
				default:
					# code...
					$article->list();
					break;
			}
		default:
			# code...
			echo "e";
			break;
	}
 ?>