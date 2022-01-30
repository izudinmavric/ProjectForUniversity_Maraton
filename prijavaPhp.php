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

// Lets create variable for getting the information from the form

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$jmbg = $_POST['jmbg'];
$email = $_POST['email'];
$brojTelefona = $_POST['brojTelefona'];
$pol = $_POST['pol'];
$mesto = $_POST['mesto'];
$drzava = $_POST['drzava'];
$datum = $_POST['datum'];

$link_address = 'index.php';
$link_img1 = 'images/x.png';
$link_img2 = 'images/correct.png';


$sql = "INSERT into ucesnici(ime, prezime, jmbg, email, brojTelefona, pol, mesto, drzava, datum) VALUES('$ime', '$prezime', '$jmbg', '$email', '$brojTelefona', '$pol', '$mesto', '$drzava', '$datum')";

if(mysqli_query($conn, $sql)){
    echo "<body style='background-color:#0969B4; position:relative; top:200px;'><h1 style='color:#FAA500;  text-align:center;'>Uspešno ste se prijavili:) <br>Drago nam je da ste prepoznali kvalitet i svrhu ovom polumaratona, želimo vam puno uspeha :)<br><br><a href='".$link_address."' style='color:#0969B4; text-decoration:none; background-color:#FAA500; padding:10px; border-radius:15px;'>Vratite se na početnu stranicu</a></h1>     <img src=".$link_img2." style='height:200px; position:relative; left:650px; top:70px;'></body>";
}else{
    echo "<body style='background-color:#0969B4; position:relative; top:200px;'><h1 style='color:#FAA500;  text-align:center;'>Molimo vas da opet pogledate prijavu! :( <br> Pogledajte sva polja jeste li ispravno uneli, i pažljivo pogledajte vaš JMBG! <br><br><a href='".$link_address."' style='color:#0969B4; text-decoration:none; background-color:#FAA500; padding:10px; border-radius:15px;'>Vratite se na početnu stranicu</a></h1>    <img src=".$link_img1." style='height:200px; position:relative; left:650px; top:70px;'></body>";
}
?>