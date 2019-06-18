<?php

$db = new mysqli("localhost", "root", "","hostel");

if (isset($_POST['edit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $sortid = $_POST['sort_id'];

   $sql = "UPDATE slider  WHERE id = $id";

   if($image_temp != "")
   {
      move_uploaded_file($image_temp , "images/$image");
       $sql ="update slider set title='$title', description='$description', link='$link', image= '$image' , sort_id= '$sortid'
            where id='$id'";   
    }
    
    else
    {

    $sql = "update slider set title='$title', description='$description', link='$link' image= '$image', sort_id= '$sortid'
                where id='$id'";

    }

   $update = mysqli_query($db, $sql);

   $db ->close();
}

