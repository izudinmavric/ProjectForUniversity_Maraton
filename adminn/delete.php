<?php
    include("../includes/connection.php");
    $id=$_GET['deleteid'];
    // echo $id;

    $sql="DELETE FROM ucesnici WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo 'Delete';
        header('location: index.php');
    }else{
        die(mysqli_error($conn));
    }

?>