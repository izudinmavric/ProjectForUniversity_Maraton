<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="../images/logoMaraton.png">
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    
<div class="naslov">
    <h1>UČESNICI</h1>
    <p>Svi učesnici koji su se prijavili za polumaraton</p>
    <p>Mozete urediti ili izbrisati takmicare</p>
</div>

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'maraton11'; 


// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// SELECT * FROM `ucesnici` ORDER BY `ucesnici`.`vreme` ASC
// WHERE user_type='0'

$sql = "SELECT * FROM `ucesnici` WHERE user_type='0' ORDER BY `ucesnici`.`vreme` ASC";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    echo "<table><tr><th>Ime</th><th>Prezime</th><th>JMBG</th><th>Datum rođenja</th><th>POL</th><th>Mesto rođenja</th><th>Država</th><th>Vreme</th><th></th><th></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row['id'];
        $link_address = 'update.php?updateid='.$id.'';
        $link_address1 = 'delete.php?deleteid='.$id.'';


        echo "<tr><td>".$row["ime"]."</td><td> ".$row["prezime"]."</td><td> ".$row["jmbg"]."</td><td> ".$row["datum"]."</td><td> ".$row["pol"]."</td><td> ".$row["mesto"]."</td><td> ".$row["drzava"]."</td><td> ".$row["vreme"]."</td><td><a href='".$link_address."' style='color:#0969B4; text-decoration:none; background-color:#FAA500; padding:10px; border-radius:15px;'>Edit</a></td><td><a href='".$link_address1."' style='color:#FAA500; text-decoration:none; background-color:#A7110F; padding:10px; border-radius:15px;'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
    
</body>
</html>