<?php 
	if (isset($_GET['mod'])) {
		$mod=$_GET['mod'];
	}else{
		$mod='home';
	}
	if (isset($_GET['act'])) {
		$act=$_GET['act'];
	} else {
		$act='list';
	}
	switch ($mod) {
		case 'home':
			echo "Bạn đã chọn chức năng home";
			break;
		case 'post':
			include_once('controllers/PostController.php');
			$post= new PostController();
			switch ($act) {
				case 'list':
					$post->list();
					break;
				case 'add':
					$post->add();
					break;
				case 'store':
					$post->store();
					break;
				case 'edit':
					$post->edit();
					break;
				case 'delete':
					$post->delete();
					break;
				case 'detail':
					$post->detail();
					break;
				case 'update':
					$post->update();
					break;

				default:
					$post->list();
					break;
			}
			break;
		case 'user':
			include_once('controllers/UserController.php');
			$user = new UserController();
			switch ($act) {
				case 'list':
					$user->list();
					break;
				case 'add':
					$user->add();
					break;
				case 'store':
					$user->store();
					break;
				case 'edit':
					$user->edit();
					break;
				case 'delete':
					$user->delete();
					break;
				case 'detail':
					$user->detail();
					break;
				case 'update':
					$user->update();
					break;
				default:
					$user->list();
					break;
			}
			break;
		default:
			echo "ERROR";
			break;
	}
?>