<?php 
	if (isset($_GET['mod'])) {
		# code...
		$mod = $_GET['mod'];
	}else{
		$mod ='home';
	}

	if (isset($_GET['act'])) {
		# code...
		$act= $_GET['act'];
	} else {
		# code...
		$act='index';
	}
	
	switch ($mod) {
		case 'home':
			# code...
			echo "Bạn vừa chọn chức năng home";
			break;
		case 'post':
			# code...
			include_once 'controllers/PostController.php';
			$post = new PostController();
			switch ($act) {
				case 'list':
					# code...
					$post->list();
					break;
				case 'add':
					# code...
					$post->add();
					break;
				default:
					# code...
				echo "Error";
					break;
			}
			break;
		default:
			# code...
		echo "e";
			break;
	}
 ?>