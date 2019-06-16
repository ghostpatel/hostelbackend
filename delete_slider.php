<?php 

$db = new mysqli("localhost","root","","hostel");

$sql = "DELETE FROM slider where $id = id";
 
session_start();

     if($_GET['delete']){
            $_SESSION["message"] = "Data has been deleted ";
             header("location:show_sliders_details.php");
              exit;
     }

?>