<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucesnici</title>
    <link rel="icon" href="images/logoMaraton.png">

    <link rel="stylesheet" href="css/ucesnici.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<head>
        <div class="nav">
        <img src="images/logoMaraton.png" class="logo" alt="">
   
        <div class="navbar">
            <ul>
                <li><a href="./index.php">Početna</a></li>
                <li><a href="./ucesnici.php">Učesnici</a></li>
                <li><a href="./galerija.php">Galerija</a></li>
            </ul>
        </div>
        <div class="login">
            <ul>
                <li><a href="./login.php"><i class="fas fa-running">        Prijavi se</i></a> </li>
            </ul>
        </div>
    </div>
    </head>

    <br>
    <br>
    <br>
    <br>
    

<div class="naslov">
    <h1>UČESNICI</h1>
    <p>Svi učesnici koji su se prijavili za polumaraton</p>
</div>

<div class="top10">
    <a href="./top10.php"><i class="fas fa-trophy"> Top 5</i></a>
</div>

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'maraton11'; 


// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `ucesnici` WHERE user_type='0' ORDER BY `ucesnici`.`vreme` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Ime</th><th>Prezime</th><th>JMBG</th><th>Datum rođenja</th><th>POL</th><th>Mesto rođenja</th><th>Država</th><th>Vreme</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ime"]."</td><td> ".$row["prezime"]."</td><td> ".$row["jmbg"]."</td><td> ".$row["datum"]."</td><td> ".$row["pol"]."</td><td> ".$row["mesto"]."</td><td> ".$row["drzava"]."</td><td> ".$row["vreme"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

    <!-- SCROLLL -->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="fas fa-chevron-up "></i>    </a>


        <script>
           // SHOW SCROLL TOP

function scrollTop() {
    const scrollTop = document.getElementById('scroll-top')
    // Kada skrolamo vise od 560 viewport height, dodajemo show-scroll header klasu
    if (this.scrollY >= 160) scrollTop.classList.add('scroll-top');
    else scrollTop.classList.remove('scroll-top')
}

window.addEventListener('scroll', scrollTop)
 </script>
    
</body>
</html>