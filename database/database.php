<?php

$servername =  'localhost';
$username = 'root';
$password = '';
$dbname = 'hostel';

$connection = new mysqli($servername,$username,$password,$dbname);

if($connection){
    echo "Database connected successfully";
}

else{ 
    die("Connection error: " . mysql_error());
}

?>