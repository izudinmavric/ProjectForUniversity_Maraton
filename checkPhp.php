<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'maraton11'; 

$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
//  if($conn->connect_error){
//      echo "ERROR - 404";
//  }else{
//      echo "Connected with database";
//  }
$jmbg = $_POST['jmbg'];
// echo "$jmbg";
$link_address = 'index.php';
$link_img2 = 'images/correct.png';


$sql = "SELECT * FROM ucesnici WHERE jmbg = '$jmbg'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['jmbg'] == $jmbg){
    echo "<body style='background-color:#0969B4; position:relative; top:200px;'><h1 style='color:#FAA500;  text-align:center;'>Vaša prijava je uspešno registrovana, nema razloga za brigu :) <br> Želimo Vam puno sreće!<br><br><a href='".$link_address."' style='color:#0969B4; text-decoration:none; background-color:#FAA500; padding:10px; border-radius:15px;'>Vratite se na početnu stranicu</a></h1>   <img src=".$link_img2." style='height:200px; position:relative; left:650px; top:70px;'></body>";
}else{
    echo "<script>alert('Proverite Vaš JMBG')</script>";
    echo "<script>location.replace('loginCheck.php')</script>";
}

?>