<?php 
	session_start();
	if (isset($_GET['mod'])) {
		# code...
		$mod=$_GET['mod'];
	}else{
		$mod='usernotlogin';
	
	}
	if (isset($_GET['act'])) {
		$act=$_GET['act'];
	} else {
		$act='list';
	}

	switch ($mod) {
		case 'usernotlogin':
			# code...

			include_once('controllers/UserNotLoginController.php');
			$usernotlogin= new UserNotLoginController();
			
			switch ($act) {
				case 'list':					
					$usernotlogin->list();					
					break;
				case 'detail':					
					$usernotlogin->detail();					
					break;
				case 'login':					
					$usernotlogin->login();					
					break;
				case 'separation':					
					$usernotlogin->separation();					
					break;
				case 'signup':					
					$usernotlogin->signup();					
					break;
				case 'confirm':					
					$usernotlogin->confirm();					
					break;
				case 'form_confirm':					
					$usernotlogin->form_confirm();					
					break;
				case 'send_email':					
					$usernotlogin->send_email();					
					break;
				case 'logout':
					$usernotlogin->logout();
				default:
					# code...
					echo "Lỗi";
					break;
			}
			break;
		case 'admin':
			include_once('controllers/AdminController.php');
			$admin= new AdminController();
			switch ($act) {
				case 'admin':					
					$admin->admin();					
					break;
				case 'add_user':					
					$admin->add_user();					
					break;
				case 'store':
					$admin->store();					
					break;
				case 'list_user':					
					$admin->list_user();					
					break;
				case 'edit_user':					
					$admin->edit_user();					
					break;
				case 'update_user':					
					$admin->update_user();					
					break;
				case 'delete_user':					
					$admin->delete_user();					
					break;
				
				case 'add_post':					
					$admin->add_post();					
					break;
				case 'store_post':
					$admin->store_post();					
					break;
				case 'list_post':					
					$admin->list_post();					
					break;
				case 'edit_post':					
					$admin->edit_post();					
					break;
				case 'update_post':					
					$admin->update_post();					
					break;
				case 'delete_post':					
					$admin->delete_post();					
					break;
				case 'detail':					
					$admin->detail();					
					break;

				default:
					# code...
					echo "Lỗi";
					break;
			}
			break;
		case 'user':
			# code...

			include_once('controllers/UserController.php');
			$user= new UserController();
			
			switch ($act) {
				case 'list':					
					$user->list();					
					break;
				case 'detail':					
					$user->detail();					
					break;
				case 'update_user':					
					$user->update_user();					
					break;
				case 'userprofile':					
					$user->userprofile();					
					break;
				default:
					# code...
					echo "Lỗi";
					break;
			}
			break;
		default:
			# code...
			break;
	}
 ?>