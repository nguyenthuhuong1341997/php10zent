<?php 
    session_start();
    if (isset($_SESSION['isLogin'])&& $_SESSION['isLogin']==1) {
		# code...
		header('Location: admin.php');
		
	}
    if (isset($_POST['email'])) {
    	# code...
    	$user= $_POST['email'];
    	$pass= $_POST['pass'];
    	if ($user=='admin' && $pass=='123') {
    		# code...
    		$_SESSION['isLogin']=true;
    		header('Location: admin.php');
    	}else{
    		$_SESSION['isLogin']=false;
    	}
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="" method="POST">
        Email <input type="text" name="email"><br>
        Pass<input type="password" name="pass"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>