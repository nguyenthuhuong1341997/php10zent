<?php 
    include_once 'views/layout/admin/header.php';
 ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <a href="?mod=admin&act=add_user" class="btn btn-success" style="margin-bottom: 20px"><i class="fas fa-plus"></i> ADD USER</a>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($admin as $admin) {
                                        # code...
                                    
                                     ?>
                                    <tr class="odd gradeX">
                                        <td><?=$admin['name']?></td>
                                        <td><?=$admin['email']?></td>
                                        <td><?=$admin['address']?></td>
                                        <td class="center"><?=$admin['type']?></td>
                                        <td class="center">
                                            <center>
                                                <a href="" class="btn btn-success" title="Detail"><i class="fas fa-eye"></i></a>
                                                <a href="?mod=admin&act=edit_user&id=<?=$admin['id']?>" class="btn btn-info" title="Edit"><i class="far fa-edit"></i></a>
                                                <button class="btn btn-danger delete" title="delete"><i class="fas fa-trash-alt"></i></button>

                                            </center>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="public/Admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/Admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/Admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="public/Admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="public/Admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="public/Admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/Admin/dist/js/sb-admin-2.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
            $(document).on('click', '.delete',function(){
                swal({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this imaginary file!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                      icon: "success",
                    });
                    window.location="?mod=admin&act=delete_user&id=<?=$admin['id']?>"
                    // return fetch(``);
                  } else {
                    swal("Your imaginary file is safe!");
                  }
                });
            })
        });
    
    </script>


</body>

</html>
