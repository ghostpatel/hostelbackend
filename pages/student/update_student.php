<?php

$db = new mysqli("localhost", "root", "","hostel");

if (isset($_POST['edit'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];

   $sql = "UPDATE student  WHERE id = $id";

   if($image_temp != "")
{
    move_uploaded_file($image_temp , "images/$image");
    $sql ="update student set name='$name', addtress='$address', phone='$phone', image= '$image'
     where id='$id'";   
}else
{
    $sql="update student set name='$name', address='$address', phone='$phone' image= '$image'
    where id='$id'"; 
}

$update = mysqli_query($db, $sql);
}