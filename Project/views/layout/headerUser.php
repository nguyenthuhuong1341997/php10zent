<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="public/usernotlogin/img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Famous Person</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="public/usernotlogin/css/linearicons.css">
    <link rel="stylesheet" href="public/usernotlogin/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/usernotlogin/css/nice-select.css">
    <link rel="stylesheet" href="public/usernotlogin/css/magnific-popup.css">
    <link rel="stylesheet" href="public/usernotlogin/css/bootstrap.css">
    <link rel="stylesheet" href="public/usernotlogin/css/main.css">
  </head>
  <body>
    <!-- Header Area -->
    <div class="main-wrapper-first">
      <header>
        <div class="container">
          <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="index.html"><img src="public/usernotlogin/img/logo.png" alt=""></a>
              </div>
              <div class="main-menubar d-flex align-items-center">
                <nav class="hide">
                  <a href="index.html">Home</a>
                  <a href="generic.html">Generic</a>
                  <ul class="nav navbar-nav navbar-right" style="float: right;">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">HELLO <?=$_SESSION['user']['name']?><b class="caret"></b></a>
                      <ul class="dropdown-menu" >
                        <li><a href="?mod=user&act=userprofile" style="color: black">User Profile</a></li>
                        <li><a href="#" style="color: black">Setting</a></li>
                        <li><a href="?mod=usernotlogin&act=logout"" style="color: black">Logout</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
    <!-- End Header Area -->