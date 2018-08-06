
<?php 
    include_once 'views/layout/headerUserNotLogin.php';
    
 ?>
  <!-- Page Header -->
    <header class="masthead" style="background-image: url('https://image.24h.com.vn/upload/2-2018/images/2018-04-26/1524746440-475-tui-tien-eo-hep-ban-di-dau-trong-ky-nghi-30-4-va-1-5-bien-con-gdao-1524745857-width1500height1000.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>My Blog</h1>
              <span class="subheading">News in the World</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php 
              foreach ($users as $user) {
                # code...
              
           ?>
          <div class="post-preview">
            <a href="?mod=usernotlogin&act=detail&id=<?=$user['id']?>">
              <h2 class="post-title">
                <?=$user['title']?>
              </h2>
            </a>
              <p class="post-subtitle">
                <?=$user['short_content']?>
              </p>
            
            <p class="post-meta">Posted by
              <a href="#"><?=$user['author']?></a>
              on <?=$user['date_public']?></p>
          </div>
          <hr>
          <?php } ?>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

<?php 
    include_once 'views/layout/footerUser.php';
 ?>