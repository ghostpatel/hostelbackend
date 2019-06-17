<?php

// print_r($_POST);
$db =  new mysqli('localhost','root','','hostel');
 
if(isset($_POST['upload'])){
   
    // print_r($_FILES); return;
   $target ="images/".basename($_FILES['image']['name']);


   $title = $_POST['title'];
   $description = $_POST['description'];
   $image = $_FILES['image']['name'];
  

  }
    $sql = "INSERT INTO slider (title, description, image) VALUES ( '$title', '$description', '$image')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    
    if(move_uploaded_file($_FILES['image']['tmp_name'] , $target)){
        $msg = "Image uploaded successfully";
    }

    else{
        $msg = "There was a problem  uploading image";
    }

    session_start();

    //  if($_GET['submit']){
            $_SESSION["msg"] = "Data has been recorded successfully";
             header("location:pages/facility/show_facility_details.php");
              exit;
        //  }


   ?>