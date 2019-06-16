<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'hostel';

$connection = new mysqli($servername,$username,$password,$db_name);

if($connection){
    echo "Database connected successfully";
}

else{ 
    die("Connection error: " . mysqli_error($connection));
}



?>