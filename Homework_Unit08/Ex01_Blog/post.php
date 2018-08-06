<?php  
	$id= $_GET['id'];
	include_once 'connection.php';
	$query="SELECT * FROM sapa WHERE id= " .$id;
	//Thực thi câu lệnh truy vấn cơ sở dữ liệu
	$result= $conn->query($query)->fetch_assoc();
	include_once 'header.php';
 ?>



    <!-- Page Header -->
    <header class="masthead" style="background-image: url('https://sapa.luhanhviet.com.vn/images/cong-tac-chuan-bi-cho-chuyen-du-lich-sapa-2.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?=$result['tittle']?></h1>
              
              <span class="meta">Posted by
                <a href="#"><?=$result['author']?></a>
                on <?=$result['date_public']?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            	<p><?=$result['contents']?></p>
            	<img src="<?=$result['image']?>" alt="">
            	<p><?=$result['contents']?></p>
          </div>
        </div>
      </div>
    </article>

    <hr>

<?php 
	include_once 'footer.php';
 ?>