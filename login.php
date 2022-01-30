<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
    <link rel="icon" href="images/logoMaraton.png">

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="vratise">
<a href="./index.php"><i class="fas fa-angle-double-left"></i></a>
</div>
<div class="uloguj">
    <a href="./prijavaAdmin.php"><i class="fas fa-sign-in-alt"> Uloguj se</i></a>
</div>
    

<div class="logo">
    <img src="images/logoMaraton.png" alt="">
</div>

<div class="forma">
<form method="post" action="prijavaPhp.php">
        <h1>Prijava za takmicenje</h1>
        <input type="text" name="ime" placeholder="Unesite vaše ime"><br><br>
        <input type="text" name="prezime" placeholder="Unesite vaše prezime"><br><br>
        <input type="text" name="jmbg" placeholder="Unesite vaš jmbg"><br><br>
        <input type="email" name="email" placeholder="Unesite vaš email"><br><br>
        <input type="text" name="brojTelefona" placeholder="Unesite vaš broj telefona"><br><br>
        <input type="text" name="pol" placeholder="Unesite vaš pol"><br><br>
        <input type="text" name="mesto" placeholder="Unesite vaše rodno mesto"><br><br>
        <input type="text" name="drzava" placeholder="Unesite vašu drzavu"><br><br>
        <input type="date" name="datum" placeholder="Unesite vaš datum"><br><br>
        <input type="submit" value="Prijavi se" class="dugme">
    </form>
    </div>
</body>
</html>