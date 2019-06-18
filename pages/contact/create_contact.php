<?php require '../../inc/_global/config.php'; ?>
<?php require '../../inc/backend/config.php'; ?>
<?php require '../../inc/_global/views/head_start.php'; ?>
<?php require '../../inc/_global/views/head_end.php'; ?>
<?php require '../../inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
            Contact Form 
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Contact</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Contact Form</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Basic -->
    <div class="block">
        
        <div class="block-content block-content-full">
            <form action="insert_contact.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input">Name</label>
                            <input type="text" class="form-control" id="example-text-input" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="example-email-input">Email</label>
                            <input type="email" class="form-control" id="example-email-input" name="email" placeholder="Enter your email address">
                        </div>
                        <div class="form-group">
                            <label for="example-password-input">Password</label>
                            <input type="password" class="form-control" id="example-password-input" name="password" placeholder="Password Input">
                        </div>
                        <div class="form-group">
                            <label for="example-textarea-input">Message</label>
                            <textarea class="form-control" id="example-textarea-input" name="message" rows="4" placeholder="Type your message here"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary" data-dismiss="modal">Submit</button>
</div>
<!-- END Page Content -->

<?php require '../../inc/_global/views/page_end.php'; ?>
<?php require '../../inc/_global/views/footer_start.php'; ?>
<?php require '../../inc/_global/views/footer_end.php'; ?>
