<?php require '../../inc/_global/config.php'; ?>
<?php require '../../inc/backend/config.php'; ?>
<?php require '../../inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $one->get_css('../../js/plugins/datatables/dataTables.bootstrap4.css'); ?>
<?php $one->get_css('../../js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css'); ?>

<?php require '../../inc/_global/views/head_end.php'; ?>
<?php require '../../inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Student Details
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Student List</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Student Details</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->
<?php 

$db = new mysqli('localhost','root','','hostel');

$sql = "SELECT * FROM student";
$data =  mysqli_query($db,$sql);
//print_r($data);

if(isset($_SESSION["msg"]) && !empty($_SESSION["msg"] )){
    $msg = $_SESSION["msg"];
    echo " $msg ";
    unset($_SESSION['msg']);
}



?>

<!-- Page Content -->
<div class="content">
     <!-- Dynamic Table with Export Buttons -->
    <div class="block">
        
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Address</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Phone Number</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Image</th>
                        <th style="width: 15%;">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $data->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["address"];?></td>
                            <td><?php echo $row["phone"];?></td>
                            <td><img src="http://localhost/hostelbackend/images/<?php echo $row["image"];?>" style="width:70px;height:50px;" ></td>
                            <td>
                               <a href=""><button type="submit" class="btn btn-primary">Edit</button></a>
                               <!-- Modal -->
                               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form class="js-validation" action="insert_student.php" method="POST" enctype="multipart/form-data">
                                            <div class="block">
                                                <div class="block-content block-content-full">
                                                    <div class="">
                                                        <div class="row items-push">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="username">Name <span class="text-danger">*</span></label>
                                                                    <input type="text" value="<?php echo $row["name"]; ?>"  class="form-control" id="name" name="name" placeholder="Enter name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="address">Address <span class="text-danger">*</span></label>
                                                                    <input type="text" value="<?php echo $row["address"]; ?>" class="form-control" id="address" name="address" placeholder="Enter  address">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                                                    <input type="text" value="<?php echo $row["phone"]; ?>" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="val-image">Profile Picture<span class="text-danger">*</span></label>
                                                                    <input type="file" class="form-control" id="images" name="image"><br>    
                                                                    <img src="http://localhost/hostelbackend/images/<?php echo $row["image"];?>" id="current_image"style="width:70px;height:50px;" >
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <!-- END Regular -->
                                                        
                                                </div>
                                            </div>
                                    
                                        </div>
                                        <div class="modal-footer">
                                              <button type="submit" class="btn btn-sm btn-primary" name="upload" data-dismiss="modal">Submit</button>
                                         </div>
	?>
                                        </form> 
                                    </div>
                                    
                                    </div>
                                </div>
                                </div>
                               <a href=""><button type="submit" class="btn btn-danger">Delete</button></a>
                           </td>
                      </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
</div>
<!-- END Page Content -->

<?php require '../../inc/_global/views/page_end.php'; ?>
<?php require '../../inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('../../js/plugins/datatables/jquery.dataTables.min.js'); ?>
<?php $one->get_js('../../js/plugins/datatables/dataTables.bootstrap4.min.js'); ?>
<?php $one->get_js('../../js/plugins/datatables/buttons/dataTables.buttons.min.js'); ?>
<?php $one->get_js('../../js/plugins/datatables/buttons/buttons.print.min.js'); ?>
<?php $one->get_js('../../js/plugins/datatables/buttons/buttons.html5.min.js'); ?>
<?php $one->get_js('../../js/plugins/datatables/buttons/buttons.flash.min.js'); ?>
<?php $one->get_js('../../js/plugins/datatables/buttons/buttons.colVis.min.js'); ?>

<!-- Page JS Code -->
<?php $one->get_js('../../js/pages/be_tables_datatables.min.js'); ?>

<?php require '../../inc/_global/views/footer_end.php'; ?>
