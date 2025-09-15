<?php 
 $hostname = "localhost";
 $username = "services_birth";
 $password = "services_birth";
 $database = "services_birth";


 $conn = mysqli_connect($hostname,$username,$password,$database);
 if(!$conn){
    echo "database Not Connected ";
 }
//  else{
//     echo "Database Connected";
//  }

?>