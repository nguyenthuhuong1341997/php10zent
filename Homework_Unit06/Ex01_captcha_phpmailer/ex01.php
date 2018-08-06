<?php
session_start();
 	$_SESSION['student']= array();
 	if (isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['gioitinh'])&&isset($_POST['address'])) {
 	$_SESSION['student'][0]= $_POST['id'];
 	$_SESSION['student'][1]= $_POST['name'];
 	$_SESSION['student'][2]= $_POST['phone'];
 	$_SESSION['student'][3]= $_POST['email'];
 	$_SESSION['student'][4]= $_POST['gioitinh'];
 	$_SESSION['student'][5]= $_POST['address'];
 }
//cấu hình thông tin do google cung cấp
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6Le7PlEUAAAAAF8jJS7DK-CgsfcvBuIsfIFzwqMT';
$secret_key  = '6Le7PlEUAAAAAGoNupmeBMJsYavc63DcHb4CBKpB';
  
//kiem tra submit form
if(isset($_POST['submit']))
{
    //lấy dữ liệu được post lên
    $site_key_post    = $_POST['g-recaptcha-response'];
      
    //lấy IP của khach
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $remoteip = $_SERVER['REMOTE_ADDR'];
    }
     
    //tạo link kết nối
    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    //lấy kết quả trả về từ google
    $response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
    $response = json_decode($response);
    if(!isset($response->success))
    {
        echo 'Captcha khong dung';
    }
    if($response->success == true)
    {
        echo 'Captcha dung';
  //       if (isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['gioitinh'])&&isset($_POST['address'])) {
		// # code...
		// echo("<br> Mã sinh viên: ") .$_POST['id'];
		// echo("<br>Họ và tên: ") .$_POST['name'];
		// echo("<br>Số điện thoại: ") .$_POST['phone'];
		// echo("<br>Email: ") .$_POST['email'];
		// echo("<br>Giới tính: ") .$_POST['gioitinh'];
		// echo("<br>Địa chỉ: ") .$_POST['address'];
		header('Location: post.php');
	}
        
    else{
        echo 'Captcha khong dung';
    }
}

 	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	
	<form action="" method="POST" role="form" style="width: 70%; padding-left: 20%">
		<center>
			<legend>ZENT GROUP- PHP_ Thực hành về gửi dữ liệu sử dụng POST</legend>
		</center>
		
		<div class="form-group " id="">
			<label for="">Mã sinh viên</label>
			<input type="text" class="form-control" id="" name="id" placeholder="Input field" required="">
			<label for="">Họ tên</label>
			<input type="text" class="form-control" id="" name="name" placeholder="Input field" required="">
			<label for="">Số điện thoại</label>
			<input type="text" class="form-control" id="" name="phone" placeholder="Input field" required="">
			<label for="">Email</label>
			<input type="email" class="form-control" id="" name="email" placeholder="Input field" required="">
			<label for="">Giới tính</label> <br>
			<input name="gioitinh" type="radio" value="Nam" />Nam
			<input name="gioitinh" type="radio" value="Nữ" />Nữ
			<input name="gioitinh" type="radio" value="Khác" />Khác <br>
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" id="" name="address" placeholder="Input field" required="">
		</div>	
		<div class="g-recaptcha" data-sitekey="<?php echo $site_key ?>"></div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
	
</body>
</html>