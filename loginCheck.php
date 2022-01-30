<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proverite vasu prijavu</title>
    <link rel="icon" href="images/logoMaraton.png">

    <style>
        body{
            background-color: #02C4FE;
        }
        form{
            display:block;
        }
        .vratise a{
    text-decoration: none;
    color: #FAA500;
    position: absolute;
    top: 20px;
    left: 50px;
    font-size: 68px;
}
.logo img{
    width: 400px;
    height: 400px;
    position: absolute;
    top: 300px;
    left: 600px;
}

.forma{
    position: relative;
    top: 70px; 
    text-align: center;
    background-color: #FAA500;
    width: 50%;
    margin: auto;
    padding: 15px;
    border-radius: 15px;
    color: #0969B4;
}

form input{
    border-radius: 5px;
    padding: 10px;
    border: 1px solid #0969B4;
    width: 250px;
}

.dugme{
    width: 150px;
    color: #FAA500;
    font-size: 16px;
    padding-left: px;
    cursor: pointer;
    
}

.dugme:hover{
    background-color: #0969B4;
}
.text{
    text-align:center;
    margin-top:50px;
    color:#0969B4;
    font-size:20px;
}


    </style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div class="vratise">
<a href="./index.php"><i class="fas fa-angle-double-left"></i></a>
</div>
<div class="logo">
    <img src="images/logoMaraton.png" alt="">
</div>
<div class="text">
    <h1>Proverite vašu prijavu</h1>
    <p>Sve sto treba da uradite jeste da upišete vas jedinstveni matični broj <br> sa kojim ste se prijavili.</p>
</div>
<div class="forma">
    <form method="post" action="checkPhp.php">
        <input type="text" name="jmbg" placeholder="Unesite vas jmbg">
        <input type="submit" class="dugme" value="Proveri">
    </form>
    </div>
</body>
</html>