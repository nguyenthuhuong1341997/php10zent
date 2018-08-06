<?php 
	/**
	* 
	*/
	include_once 'models/UserNotLogin.php';
	class UserNotLoginController 
	{
		var $users_model;
		function __construct()
		{
			$this->users_model= new UserNotLogin();
		}

		function list(){
			
			$users = $this->users_model->list();
			require_once('views/usernotlogin/user_not_login.php');
		}
		function detail(){
			$id=$_GET['id'];
			$users = $this->users_model->find();
			require_once('views/usernotlogin/detail.php');
		}
		function login(){
			require_once 'views/usernotlogin/login.php';
		}
		function separation(){
			$email=$_POST['email'];
			$password=md5($_POST['password']);

			$users = $this->users_model->check($email,$password);
			// header("Location: ?mod=admin&act=admin");
			echo "ok";
			echo "<pre>";
				print_r($users['type']);
			echo "</pre>";
			if ($users['type']=='user') {
				$_SESSION['user']= array(
					'id'=>$users['id'],
					'name'=>$users['name'],
					'password'=>$users['password'],
					'address'=>$users['address'],
					'type'=>$users['type'],
					'email'=>$users['email']
				);
				
				header("Location: ?mod=user&act=list");
			} else {
				if ($users['type']=='admin') {
					$_SESSION['user']= array(
						'name'=>$users['name'],
						'password'=>$users['password'],
						'address'=>$users['address'],
						'type'=>$users['type'],
						'email'=>$users['email']
					);
					header("Location: ?mod=admin&act=admin");
				} else {
					header("Location: ?mod=usernotlogin&act=login");
				}
				
			}
			
		}
		function signup(){
			require_once 'views/usernotlogin/signup.php';
		}

		function send_email(){
			$pass1=$_POST['pass'];
			$pass2=$_POST['repeat-pass'];
			if ($pass1==$pass2) {
				$_SESSION['sign']= array(
					'name'=>$_POST['name'],
					'email'=>$_POST['email'],
					'address'=>$_POST['address'],
					'type'=>'user',
					'password'=>md5($_POST['pass']),
					'random'=> rand(100000,200000)
				);
				setcookie('msg3','Password is true',time()+5);
				require_once 'views/usernotlogin/confirm.php';
				
			} else{				
				setcookie('msg','Password is not true',time()+5);
				header("Location: ?mod=usernotlogin&act=signup");
			}
			
		}
		function form_confirm(){
			require_once 'views/usernotlogin/confirm.php';
		}
		function confirm(){
			$code=$_POST['code'];
			if ($_SESSION['sign']['random']==$code) {
				setcookie('msg1','',time()+5);
				$admin = $this->users_model->insert($_SESSION['sign']);
				header("Location: ?mod=usernotlogin&act=login");
			} else {
				# code...
				setcookie('msg2','Code is not true',time()+25);
				header("Location: ?mod=usernotlogin&act=form_confirm");
			}
		
		}

		function logout(){
			session_destroy();
			header("Location: ?mod=usernotlogin&act=list");

		}
	}
 ?>