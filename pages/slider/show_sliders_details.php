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
                Slider Details
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Slider</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Slider Details</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<?php 

$db = new mysqli('localhost','root','','hostel');

$sql = "SELECT * FROM slider";
$data =  mysqli_query($db,$sql);
//print_r($data);

if(isset($_SESSION["msg"]) && !empty($_SESSION["msg"] )){
    $msg = $_SESSION["msg"];
    echo " $msg ";
    unset($_SESSION['msg']);
}

if(isset($_SESSION["message"]) && !empty($_SESSION["message"] )){
    $message = $_SESSION["message"];
    echo " $message ";
    unset($_SESSION['message']);
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
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Title</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Description</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Link</th>
                        <th style="width: 15%;">Image</th>
                        <th style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $data->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["title"]; ?></td>
                            <td><?php echo $row["description"];?></td>
                            <td><?php echo $row["link"];?></td>
                            <td>
                                <img src="http://localhost/hostelbackend/images/<?php echo $row["image"];?>" style="width:70px;height:50px;" >
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Edit
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Slider</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form class="js-validation" action="insert_slider.php" method="POST" enctype="multipart/form-data">
                                            <div class="block">
                                                <div class="block-content block-content-full">
                                                    <div class="">
                                                        <div class="row items-push">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="val-title">Title <span class="text-danger">*</span></label>
                                                                    <input type="text" value="<?php echo $row["title"]; ?>"  class="form-control" id="title" name="title" placeholder="Enter a title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="val-description">Description <span class="text-danger">*</span></label>
                                                                    <input type="text" value="<?php echo $row["description"]; ?>" class="form-control" id="description" name="description" placeholder="Enter a description">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="val-link">Link <span class="text-danger">*</span></label>
                                                                    <input type="text" value="<?php echo $row["link"]; ?>" class="form-control" id="link" name="link" placeholder="Enter link">
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="val-image">Profile Picture<span class="text-danger">*</span></label>
                                                                    <input type="file" class="form-control" id="images" name="image"><br>    
                                                                    <img src="http://localhost/hostelbackend/images/<?php echo $row["image"];?>" id="current_image"style="width:70px;height:50px;" >
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="sort_id">Sorting Id</label>
                                                                <input type="text" value="<?php echo $row["sort_id"]; ?>" class="form-control" id="sort_id" name="sort_id" placeholder=" ">
                                                                <!-- <select class="form-control" id="sort_id" name="sort_id">
                                                                    <option value="0">Please select</option>
                                                                    <option value="1">Option #1</option>
                                                                </select> -->
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
                                <a href="delete_slider.php"><button type="submit" class="btn btn-danger"> Delete</button></a>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#images').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#current_image").change(function() {
  readURL(this);
});
</script>

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
