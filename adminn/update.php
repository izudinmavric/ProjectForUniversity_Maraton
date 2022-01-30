<?php
    include("../includes/connection.php");
    $id=$_GET['updateid'];
    $sql="SELECT * FROM ucesnici WHERE id=$id";
    $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
    $ime = $row['ime'];
    $prezime = $row['prezime'];
    $jmbg = $row['jmbg'];
    $email = $row['email'];
    $brojTelefona = $row['brojTelefona'];
    $pol = $row['pol'];
    $mesto = $row['mesto'];
    $drzava = $row['drzava'];
    $datum = $row['datum'];
    $vreme = $row['vreme'];

    if(isset($_POST['update'])){
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $jmbg = $_POST['jmbg'];
        $email = $_POST['email'];
        $brojTelefona = $_POST['brojTelefona'];
        $pol = $_POST['pol'];
        $mesto = $_POST['mesto'];
        $drzava = $_POST['drzava'];
        $datum = $_POST['datum'];
        $vreme = $_POST['vreme'];

        $sql="UPDATE ucesnici SET ime='$ime', prezime='$prezime', jmbg='$jmbg', email='$email', brojTelefona='$brojTelefona', pol='$pol', mesto='$mesto', drzava='$drzava', datum='$datum', vreme='$vreme' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            header('location: index.php');
        }else{
            die(mysqli_error($conn));
                 }

    }


   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <link rel="icon" href="../images/logoMaraton.png">
    <link rel="stylesheet" href="update.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>
<body>
<div class="vratise">
<a href="./index.php"><i class="fas fa-angle-double-left"></i></a>
</div>
<div class="forma">
<form method="post" action="">
        <h1>Unesite izmene</h1>
        <input type="text" name="ime" placeholder="Izmenite ime" autocomplete="off" value=<?php echo $ime?>><br><br>
        <input type="text" name="prezime" placeholder="Izmenite prezime" autocomplete="off" value=<?php echo $prezime?>><br><br>
        <input type="text" name="jmbg" placeholder="Izmenite jmbg" autocomplete="off" value=<?php echo $jmbg?>><br><br>
        <input type="email" name="email" placeholder="Izmenite email" autocomplete="off" value=<?php echo $email?>><br><br>
        <input type="text" name="brojTelefona" placeholder="Izmenite broj telefona" autocomplete="off" value=<?php echo $brojTelefona?>><br><br>
        <input type="text" name="pol" placeholder="Izmenite pol" autocomplete="off" value=<?php echo $pol?>><br><br>
        <input type="text" name="mesto" placeholder="Izmenite rodno mesto" autocomplete="off" value=<?php echo $mesto?>><br><br>
        <input type="text" name="drzava" placeholder="Izmenite drzavu" autocomplete="off" value=<?php echo $drzava?>><br><br>
        <input type="date" name="datum" placeholder="Izmenite datum" autocomplete="off" value=<?php echo $datum?>><br><br>
        <input type="time" name="vreme" placeholder="Izmenite vreme" name="appt-time" step="2" autocomplete="off" value=<?php echo $vreme?>><br><br>
        <input type="submit" name="update" value="Izmeni" class="dugme">
    </form>
    </div>

</body>
</html>
