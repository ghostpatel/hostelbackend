<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/select2/css/select2.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Slider Form
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Slider</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Slider Form</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->



<!-- Page Content -->
<div class="content">
    <!-- jQuery Validation (.js-validation class is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js) -->
    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
    <form class="js-validation" action="insert_slider.php" method="POST" enctype="multipart/form-data">
        <div class="block">

            <div class="block-content block-content-full">
                <div class="">
                    <div class="row items-push">
                        <div class="col-md-8 col-xl-5">
                            <div class="form-group">
                                <label for="val-title">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title">
                            </div>
                            <div class="form-group">
                                <label for="val-description">Description <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter a description">
                            </div>
                            <div class="form-group">
                                <label for="val-link">Link <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="link" name="link" placeholder="Enter link">
                            </div>
                        
                            <div class="form-group">
                                <label for="val-image">Profile Picture<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                            <div class="form-group">
                            <label for="sort_id">Sorting Id</label>
                            <input type="text" class="form-control" id="sort_id" name="sort_id" placeholder=" ">
                            <!-- <select class="form-control" id="sort_id" name="sort_id">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                            </select> -->
                        </div>
                        </div>  
                    </div>
                    <!-- END Regular -->
                    <button type="submit" class="btn btn-sm btn-primary" name="upload" data-dismiss="modal">Submit</button>
            </div>
        </div>
   
     </div>
    </form> 
</div>
<!-- END Terms Modal -->

<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>
<?php $one->get_js('js/plugins/jquery-validation/additional-methods.js'); ?>

<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function(){ One.helpers('select2'); });</script>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/be_forms_validation.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
