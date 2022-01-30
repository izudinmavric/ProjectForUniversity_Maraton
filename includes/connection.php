<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'maraton11'; 

$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
// if($conn->connect_error){
    //      echo "ERROR - 404";
    //  }else{
    //      echo "Connected with database";
    //  }
    
?>