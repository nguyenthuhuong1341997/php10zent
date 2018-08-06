<?php 
    include_once 'connection.php';

    $query= "SELECT * FROM news ";

    $result= $conn->query($query);

    include_once 'headerAdmin.php';


 ?>
 		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Xem bài viết</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            	<table class="table" >
            		<tr style="width: 100px;">
            			<td style="border: 1px solid black;  width: 100px;">Title</td>
            			<td style="border: 1px solid black;  width: 200px;">Short-content</td>
            			<!-- <td style="border: 1px solid black">Contents</td>
            			<td style="border: 1px solid black">Image</td> -->
            			<!-- <td style="border: 1px solid black">Date_public</td> -->
            			<td style="border: 1px solid black;  width: 100px;">Author</td>
            			<td style="border: 1px solid black;  width: 200px;"></td>
            		</tr>
            		<?php while ($row= $result->fetch_assoc()) {
            			# code...
            		 ?>
            		<tr style="border: 1px solid black">
            			<td style="border: 1px solid black"><?=$row['title']?></td>
            			<td style="border: 1px solid black"><?=$row['short_content']?></td>
            			<!-- <td style="border: 1px solid black"><?=$row['contents']?></td>
            			<td style="border: 1px solid black"><?=$row['image']?></td>
            			<td style="border: 1px solid black"><?=$row['date_public']?></td> -->
            			<td style="border: 1px solid black"><?=$row['author']?></td>
            			<td style="border: 1px solid black">
							<a class=" btn btn-success" href="edit.php?id=<?=$row['id']?>">Sửa bài viết</a>
							<a class=" btn btn-danger" href="delete.php?id=<?=$row['id']?>" >Xóa bài viết</a>
							
            			</td>
            		</tr>
            		<?php  } ?>
            	</table>
            </div>
            

<?php 
	include_once 'footer.php';
 ?>
