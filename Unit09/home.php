<?php 
	include_once("connection.php");

	// Câu lệnh truy vấn CSDL
	$query="SELECT * FROM news";

	// Thực thi câu lệnh truy vấn CSDL
	$result= $conn->query($query);
	include_once("header.php");
	
?>
<header class="masthead" style="background-image: url('http://vuinhiepanh.com/assets/uploads/2017/09/landscape-photography_1645.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Linh Blog</h1>
              <span class="subheading">A Blog by Linh</span>
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
	                <h3 class="post-title">
	               		<a href="news.php?id=<?= $row['id']?>"><?= $row['title'] ?></a>
	                </h3>
	                <p class="post-subtitle">
	                	<?= $row['short_content'] ?>
	                </p>
	            	<p class="post-meta">Posted by
	              		<a href="#"><?= $row['author'] ?></a>
	              		on <?= $row['date_public'] ?></p>
	              	<a href="admin_edit.php?id=<?=$row['id']?>">Sửa bài viết</a>
	              	<a href="delete.php?id=<?=$row['id']?>">Xóa bài viết</a>
	          	</div>
	          	<hr>
	      		<?php
	      			}
	  			?>
	          
	          <!-- Pager -->
	          	<div class="clearfix">
	            	<a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
	          	</div>
	        </div>
      	</div>
    </div>

    <hr>
<?php 
	include_once("footer.php");
?>