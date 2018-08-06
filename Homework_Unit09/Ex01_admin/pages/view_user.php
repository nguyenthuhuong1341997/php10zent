<?php 
    include_once 'connection.php';

    $query= "SELECT * FROM user ";

    $result= $conn->query($query);

    include_once 'headerAdmin.php';


 ?>
 		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Xem thông tin người dùng</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            	<table class="table" >
            		<tr style="width: 100px;">
            			<td style="border: 1px solid black;  width: 100px;">Name</td>
            			<td style="border: 1px solid black;  width: 200px;">Password</td>
            			<!-- <td style="border: 1px solid black">Contents</td>
            			<td style="border: 1px solid black">Image</td> -->
            			<!-- <td style="border: 1px solid black">Date_public</td> -->
            			<td style="border: 1px solid black;  width: 100px;">Address</td>
            			<td style="border: 1px solid black;  width: 200px;"></td>
            		</tr>
            		<?php while ($row= $result->fetch_assoc()) {
            			# code...
            		 ?>
            		<tr style="border: 1px solid black">
            			<td style="border: 1px solid black"><?=$row['name']?></td>
            			<td style="border: 1px solid black"><?=$row['password']?></td>
            			
            			<td style="border: 1px solid black"><?=$row['address']?></td>
            			<td style="border: 1px solid black">
							<a class=" btn btn-success" href="edit_user.php?id=<?=$row['id']?>">Sửa thông tin</a>
							<a class=" btn btn-danger" href="delete_user.php?id=<?=$row['id']?>" >Xóa người dùng</a>
							
            			</td>
            		</tr>
            		<?php  } ?>
            	</table>
            </div>
            

<?php 
	include_once 'footer.php';
 ?>
