<?php 
	/**
	* 
	*/
	include_once 'models/User.php';
	class UserController 
	{
		
		function __construct()
		{
			# code...
			
		}

		function list(){
			

			$user_model = new User();
			$postsUser = $user_model->list();
			require_once 'views/user/user.php';
		}

		
	}

 ?>