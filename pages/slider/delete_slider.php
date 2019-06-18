<?php 

$db = new mysqli("localhost","root","","hostel");

$id = $_POST['id'];

print_r ($id); die();

$sql = "DELETE FROM slider where id = '".$id."'";

 
   $result = mysqli_query($db, $sql);
 
// session_start();

//      if($_GET['delete']){
//             $_SESSION["message"] = "Data has been deleted ";
//              header("location:pages/slider/show_sliders_details.php");
//               exit;
//      }
$db->close();

?>