<?php 
    include_once 'connection.php';

    $query= "SELECT * FROM news ";

    $result= $conn->query($query);

    include_once 'header_user.php';


 ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin tức trong ngày</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php 
                    while ($row=$result->fetch_assoc()) {
                            # code...
                        
                 ?>
                <div class="col-md-4" style="margin: 2% 1%">
                    <img src="<?=$row['image']?>" style="width: 90%">
                </div>
                <div class="col_md_8" style="margin: 2% 4% 2% 0%">
                    <a href="user_readmore.php?id=<?=$row['id']?>" style="font-size: 25px;"><?=$row['title']?></a>
                    <p style="font-size: 16px;"><?=$row['short_content']?></p>
                    
                    <p class="post-meta" style=" font-size: 13px;padding-left: 70%">Posted by
                        <a href="#"><?= $row['author'] ?></a>
                        on <?= $row['date_public'] ?></p>
                </div>

                <div style="clear: both;"></div>
                <?php } ?>
            </div>
         </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php 
    include_once 'footer.php';
 ?>