<?php 

include_once('../database/database.php');

$errMsg = array();



if (!isset($_POST["title"]) || trim($_POST["title"])=='') {
    
    $errMsg['title']="Title is required";

  } 

if (!isset($_POST["description"]) || trim($_POST["description"])=='') {
     
    $errMsg['description']="Description is required";

  }

if (!isset($_POST["link"]) || trim($_POST["link"])=='') {
     $errMsg['link']="Link is required";
} 


if (!isset($_POST["image"]) || trim($_POST["image"])=='') {
    $errMsg['image']="Image is required";
 }
            

if(count($errMsg)==0)
      {
      $jsonData = array('msg' => "All field is correct",'status'=>"success" );
      
      echo json_encode($jsonData);

       $sql = "INSERT INTO slider (title,description,link,image,sorting_id)
            VALUES ('".$_POST["title"]."','".$_POST["description"]."','".$_POST["link"]."','".$_POST["image"]."','".$_POST["sorting_id"]."')";

            if($connection->query($sql)===TRUE){
               $errMsg = array('status' => 200, 'msg' => "successful entry");
         echo json_encode($errMsg);
    }
 
    else{

        echo "ERROR:".$sql."<br>".$connection->connect_error;
    } 
      
}
else{
  $jsonData = array('msg' => "error in some field",'status'=>"failed" );
  $jsonData['data']=$errMsg;
  echo json_encode($jsonData);
}


$connection->close();


?>