<?php

   $servername="localhost";
   $username="root";
   $password="";
   $dbname="hostel";


   $conn = new mysqli($servername,$username,$password,$dbname);
    




          $sql  = "INSERT INTO `user` (`id`, `username`, `usertype`, `password`) VALUES (NULL, '".$_POST["username"]."', '".$_POST["ut"]."', '".$_POST['pass']."')";




          
                
                if($conn->query($sql)===TRUE){
                   echo "Successful";
        }
     
        else{

            echo "ERROR:".$sql."<br>".$conn->connect_error;
        } 
          
    
    


   $conn->close();
   ?>