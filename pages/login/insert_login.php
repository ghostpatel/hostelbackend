<?php

// print_r($_POST);
$db =  new mysqli('localhost','root','','hostel');
 


   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmpwd = $_POST['confirm_password'];
   $usertype = $_POST['user_type'];

  
    $sql = "INSERT INTO login (username, email, password, confirm_passowrd, user_type) VALUES ( '$username', '$email', '$password', '$confirmpwd', '$usertype')";

    //print_r($sql);die();

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    

    session_start();

    //  if($_GET['submit']){
            $_SESSION["msg"] = "Data has been recorded successfully";
             header("location: show_login.php");
              exit;
        //  }


   ?>