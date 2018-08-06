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
    <style type="text/css">
       .panel.panel-default {
            border-top-width: 3px;
        }
        .panel {
            box-shadow: 0 3px 1px -2px rgba(0,0,0,.14),0 2px 2px 0 rgba(0,0,0,.098),0 1px 5px 0 rgba(0,0,0,.084);
            border: 0;
            border-radius: 4px;
            margin-bottom: 16px;
        }
        .thumb96 {
            width: 96px!important;
            height: 96px!important;
        }
        .thumb48 {
            width: 48px!important;
            height: 48px!important;
        }
    </style>
    
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
    <!-- Banner Area -->
    <div class="main-wrapper">
      <div class="banner-area">
        <div class="container">
          <div class="row height justify-content-center align-items-center">
            <div class="col-lg-5 col-sm-6 col-xs-6">
              <div class="banner-content">
                <h1>Everytime New stylesSuit You Unlike Other</h1>
                <p>
                  inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.s
                </p>
                <button class="primary-btn white-bg d-inline-flex align-items-center mt-10 ml-auto"><span class="mr-10">Send Message</span><span class="lnr lnr-arrow-right"></span></button>
              </div>
            </div>
            <div class="col-lg-5 col-sm-6 col-xs-6">
              <img class="img-fluid mx-auto" src="public/usernotlogin/img/header-img.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Banner Area -->
      
    
    <div class="main-wrapper">
      <section>
          <div style="padding-top:20px; background:pink;">
          <div class="container bootstrap snippet">
          <div class="row ng-scope">
              <div class="col-md-4">
                  <div class="panel panel-default">
                      <div class="panel-body text-center">
                          <div class="pv-lg" style="padding-top: 20px"><img class="center-block img-responsive img-circle img-thumbnail thumb96" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Contact"></div>
                          <h3 class="m0 text-bold"><?=$_SESSION['user']['name']?></h3>
                          <div class="mv-lg">
                              <p>Hello, I'm a just a dummy contact in your contact list and this is my presentation text. Have fun!</p>
                          </div>
                          <div class="text-center" style="padding-bottom: 20px"><a class="btn btn-primary" href="">Send message</a></div>
                      </div>
                  </div>
                  
              </div>
              <div class="col-md-8">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="pull-right">
                              <div class="btn-group dropdown" uib-dropdown="dropdown" style="padding-top: 20px">
                                  <button class="btn btn-link dropdown-toggle" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false"><em class="fa fa-ellipsis-v fa-lg text-muted"></em></button>
                                  <ul class="dropdown-menu dropdown-menu-right animated fadeInLeft" role="menu">
                                      <li><a href=""><span>Send by message</span></a></li>
                                      <li><a href=""><span>Share contact</span></a></li>
                                      <li><a href=""><span>Block contact</span></a></li>
                                      <li><a href=""><span class="text-warning">Delete contact</span></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="h4 text-center" style="padding-top: 20px">Information</div>
                          <div class="row pv-lg">
                              <div class="col-lg-2"></div>
                              <div class="col-lg-8">
                                  <form class="form-horizontal ng-pristine ng-valid" method="POST" action="?mod=user&act=update_user&id=<?=$_SESSION['user']['id']?>">
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label" for="inputContact1">Name</label>
                                          <div class="col-sm-10">
                                              <input class="form-control" id="inputContact1" type="text" name="name" placeholder="" value="<?=$_SESSION['user']['name']?>">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label" for="inputContact2">Email</label>
                                          <div class="col-sm-10">
                                              <input class="form-control" id="inputContact2" type="email"  name="email" value="<?=$_SESSION['user']['email']?>">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label" for="inputContact3">Address</label>
                                          <div class="col-sm-10">
                                              <input class="form-control" id="inputContact3" type="text" name="address" value="<?=$_SESSION['user']['address']?>">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label" for="inputContact4">Type</label>
                                          <div class="col-sm-10">
                                              <input class="form-control" id="inputContact4" type="text" value="<?=$_SESSION['user']['type']?>">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-sm-offset-2 col-sm-10">
                                              <div class="checkbox">
                                                  <label>
                                                      <input type="checkbox"> Favorite contact?</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group" style="padding-bottom: 20px">
                                          <div class="col-sm-offset-2 col-sm-10">
                                              <button class="btn btn-info" type="submit">Update</button>
                                          </div>
                                      </div>
                                  </form>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      </section>
      <!-- Newsletter Area -->
      <section class="newsletter-area pt-60 pb-60">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="text-center">
              <h3 class="text-white">Subscribe for our Newsletter</h3>
              <p>We won’t send any kind of spam</p>
              <div class="subcribe-form" id="mc_embed_signup">
                <form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative">
                    <input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
                    <div style="position: absolute; left: -5000px;">
                      <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                    </div>
                    <button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></button>
                    <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- End Newsletter Area -->
      <!-- Start footer Area -->
      <footer class="footer-area relative pt-60 pb-60">
        <div class="container">
          <div class="footer-content d-flex flex-column align-items-center">
            <div class="text-center copy-right-text">Copyright &copy; 2017 All rights reserved   |   This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com">Colorlib</a></div>
            <div class="footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </footer>
      <!-- End footer Area -->
    </div>

    <script src="public/usernotlogin/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="public/usernotlogin/js/vendor/bootstrap.min.js"></script>
    <script src="public/usernotlogin/js/jquery.ajaxchimp.min.js"></script>
    <script src="public/usernotlogin/js/jquery.nice-select.min.js"></script>
    <script src="public/usernotlogin/js/jquery.magnific-popup.min.js"></script>
    <script src="public/usernotlogin/js/main.js"></script>

    <script type="text/javascript">
         // tabbed content
        // http://www.entheosweb.com/tutorials/css/tabs.asp
        $(".tab_content").hide();
        $(".tab_content:first").show();

      /* if in tab mode */
        $("ul.tabs li").click(function() {
        
          $(".tab_content").hide();
          var activeTab = $(this).attr("rel"); 
          $("#"+activeTab).fadeIn();    
        
          $("ul.tabs li").removeClass("active");
          $(this).addClass("active");

        $(".tab_drawer_heading").removeClass("d_active");
        $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
        
        });
      /* if in drawer mode */
      $(".tab_drawer_heading").click(function() {
          
          $(".tab_content").hide();
          var d_activeTab = $(this).attr("rel"); 
          $("#"+d_activeTab).fadeIn();
        
        $(".tab_drawer_heading").removeClass("d_active");
          $(this).addClass("d_active");
        
        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
        });
      
      
      /* Extra class "tab_last" 
         to add border to right side
         of last tab */
      $('ul.tabs li').last().addClass("tab_last");
      
    </script>
  </body>
</html>
