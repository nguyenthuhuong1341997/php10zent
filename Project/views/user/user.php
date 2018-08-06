<?php 
  include_once 'views/layout/headerUser.php';
 ?>

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

      <!-- Start Feature Area -->
      <section class="featured-area">
        <div class="container">
          <div class="row">
            <?php 
              foreach ($users as $user) {
                # code...
              
           ?>
            <div class="col-md-4 col-sm-12 single-feature pt-30 pb-30 d-flex flex-row">
              <img class="img-fluid" src="<?=$user['image']?>" alt="" style="width: 40%">
              <div class="desc">
                <h2><?=$user['title']?></h2>
                <p>
                 <?=$user['short_content']?>
                </p>
                <a class="text-uppercase" href="?mod=user&act=detail&id=<?=$user['id']?>">Learn Details</a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <!-- End Feature Area -->
      <!-- Start special offer Area -->
      <section class="special-offer-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 text-center offer-left">
              <div class="offer_desc p-20">
                <h2>Mountainå Maniac</h2>
                <p>
                  LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer, more portable technology than we’ve ever had access to before.
                </p>
              </div>
            </div>
            <div class="col-md-6 text-center offer-right">
              <div class="offer_desc p-20">
                <h2>Foggy Mountain</h2>
                <p>
                  LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer, more portable technology than we’ve ever had access to before.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End special offer Area -->
      <!-- Gallery Area -->
      <section class="image-gallery-area pt-60 pb-60">
        <div class="row gallery-item">
          <div class="col-md-8 single-item">
            <a href="public/usernotlogin/img/g1.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(public/usernotlogin/img/g1.jpg);"></div></a>
          </div>
          <div class="col-md-4 single-item">
            <a href="public/usernotlogin/img/g2.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(public/usernotlogin/img/g2.jpg);"></div></a>
          </div>
          <div class="col-md-4 single-item">
            <a href="public/usernotlogin/img/g3.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(public/usernotlogin/img/g3.jpg);"></div></a>
          </div>
          <div class="col-md-4 single-item">
            <a href="public/usernotlogin/img/g4.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(public/usernotlogin/img/g4.jpg);"></div></a>
          </div>
          <div class="col-md-4 single-item">
            <a href="public/usernotlogin/img/g5.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(public/usernotlogin/img/g5.jpg);"></div></a>
          </div>
          <div class="col-md-4 single-item">
            <a href="public/usernotlogin/img/g6.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(public/usernotlogin/img/g6.jpg);"></div></a>
          </div>
          <div class="col-md-8 single-item">
            <a href="public/usernotlogin/img/g7.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(public/usernotlogin/img/g7.jpg);"></div></a>
          </div>
        </div>
      </section>
      <!-- End Gallery Area -->
      <!-- Process Area -->
      <section class="process-area pt-100 pb-100">
        <div class="container">
          <div class="row">
            <div class="single_process col-md-4 p-10">
              <div class="icon">
                <span class="lnr lnr-line-spacing"></span>
              </div>
              <div class="desc">
                <h2>Parallax Support</h2>
                <p>
                  Lorem ipsum dolor sit ametconsec tetur adipisicing elit.
                </p>
              </div>
            </div>
            <div class="single_process col-md-4 p-10">
              <div class="icon">
                <span class="lnr lnr-camera-video"></span>
              </div>
              <div class="desc">
                <h2>HTML5 Video</h2>
                <p>
                  Lorem ipsum dolor sit ametconsec tetur adipisicing elit.
                </p>
              </div>

            </div>
            <div class="single_process col-md-4 p-10">
              <div class="icon">
                <span class="lnr lnr-screen"></span>
              </div>
              <div class="desc">
                <h2>Retina Ready Graphics</h2>
                <p>
                  Lorem ipsum dolor sit ametconsec tetur adipisicing elit.
                </p>
              </div>

            </div>
            <div class="single_process col-md-4 p-10">
              <div class="icon">
                <span class="lnr lnr-sync"></span>
              </div>
              <div class="desc">
                <h2>Endless Possibilities</h2>
                <p>
                  Lorem ipsum dolor sit ametconsec tetur adipisicing elit.
                </p>
              </div>
            </div>
            <div class="single_process col-md-4 p-10">
              <div class="icon">
                <span class="lnr lnr-thumbs-up"></span>
              </div>
              <div class="desc">
                <h2>Documentation</h2>
                <p>
                Lorem ipsum dolor sit ametconsec tetur adipisicing elit.
              </p>
              </div>

            </div>
            <div class="single_process col-md-4 p-10">
              <div class="icon">
                <span class="lnr lnr-book"></span>
              </div>
              <div class="desc">
                <h2>Boxed & Wide Layouts</h2>
                <p>
                  Lorem ipsum dolor sit ametconsec tetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Process Area -->

      <!-- About Area -->
      <section class="about-area">
        <div class="container-fluid">
          <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6 about-left">
              <img class="img-fluid" src="public/usernotlogin/img/about.jpg" alt="">
            </div>
            <div class="col-lg-6 about-right p-40">
              <div class="begining-content">
                <div class="single_about">
                  <h2>Powerful Performance</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                  </p>
                </div>
                <div class="single_about">
                  <h2>Light & Dark Color Schemes</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Area -->

<?php 
    include_once 'views/layout/footerUser.php';
 ?>