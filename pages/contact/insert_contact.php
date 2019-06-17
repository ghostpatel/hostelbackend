<?php

// print_r($_POST);
$db =  new mysqli('localhost','root','','hostel');
 
if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
  
}
  
    $sql = "INSERT INTO contact (name,email,message) VALUES ( '$name', '$email', '$message')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    
    session_start();

    //  if($_GET['submit']){
            $_SESSION["msg"] = "Data has been recorded successfully";
             header("location:pages/slider/show_sliders_details.php");
              exit;
        //  }


   ?>