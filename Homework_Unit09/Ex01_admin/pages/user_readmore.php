<?php 
    $id= $_GET['id'];
    include_once 'connection.php';
    

    $query= "SELECT * FROM news WHERE id= " .$id;

    $result= $conn->query($query)->fetch_assoc();

    include_once 'header_user.php';


 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?=$result['title']?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <b style="font-size: 16px;"><?=$result['short_content']?></b> <br>
            <img src="<?=$result['image']?>" alt="" style="width: 60%">
            <p style="font-size: 16px;"><?=$result['contents']?></p>    
            <p class="post-meta" style=" font-size: 13px;padding-left: 70%">Posted by
            <a href="#"><?= $result['author'] ?></a>
            on <?= $result['date_public'] ?></p>
    <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
            
<?php 
    include_once 'footer.php';
 ?>