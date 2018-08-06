<?php 
	include_once "connection.php";

	$query="SELECT * FROM sapa;";

	$result= $conn->query($query);
	include_once "header.php";
 ?>



    <!-- Page Header -->
    <header class="masthead" style="background-image: url('http://baoquangninh.com.vn/dataimages/201312/original/images705697_1.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1 style="font-size: 120px;">SAPA</h1>
              <span class="subheading" style="font-size: 60px;">Ngày lại ngày em</span>
              <span class="subheading" style="font-size: 60px;">Em vẫn đẹp tinh khôi</span>
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
				while ($row=$result->fetch_assoc()) {
			?>
          	<div class="post-preview">
            	<a href="post.php?id=<?= $row['id']?>"><h2 >
	                <?= $row['tittle']?>
	              </h2></a>
	            <p class="post-title"><?= $row['short_content']?></p> 
	            
	           <p class="post-meta">Posted by
	              <a href="#"><?= $row['author']?></a>
	              on <?= $row['date_public']?></p>
        	</div>
          	<hr>
          	<?php  } ?>
          <!-- Pager -->
         
        </div>
      </div>
    </div>

    <hr>

<?php 
	include_once "footer.php";
 ?>