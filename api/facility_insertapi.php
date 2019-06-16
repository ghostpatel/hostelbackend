<?php

   $servername="localhost";
   $username="root";
   $password="";
   $dbname="hostel";


   $conn = new mysqli($servername,$username,$password,$dbname);
    $file = $_FILES['image']['tmp_name'];




          $sql  = "INSERT INTO `facility` (`id`, `title`, `description`, `image`) VALUES (NULL, '".$_POST["title"]."', '".$_POST["fd"]."', '".$_POST['image']."')";




          
                
                if($conn->query($sql)===TRUE){
                   echo "Successful";
        }
     
        else{

            echo "ERROR:".$sql."<br>".$conn->connect_error;
        } 
          
    
    


   $conn->close();
   ?>