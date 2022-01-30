<?php session_start();
include("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pazarski polumaraton</title>
    <link rel="icon" href="images/logoMaraton.png">
    <link rel="stylesheet" href="css/index.css">
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

    <section>
        <div class="mainSection">
            <img src="images/maraton2.jpg" alt="">
            <div class="drugimaraton">
                <h1>2. Pazarski polumaraton</h1>
            </div>
            <div class="vreme">
                <h1>02.09.2022</h1>
            </div>
            <div class="prijavise">
                <a href="./login.php">Učestvuj i ti!</a>
            </div>
        </div>
    </section>
    <section>
        <div class="secondSection">

            <div class="slide">
                <img src="images/marthonPng.png" alt="">
            </div>
            <div class="columns">
                <div class="column">
                    <h3><i class="fas fa-search-dollar"> Kotizacija</i></h3>
                    <p>Cena učesničkog paketa 21,1 km 1800 din (18 eur) <br>
                        Cena učesničkog paketa 5 km 500 din (5 eur) <br> SAV PRIHOD OD TRKE NA 5 km IDE U HUMANITARNE SVRHE</p>
                </div>
                <div class="column columnPrijava">
                    <h3><i class="fas fa-sign-in-alt"> Prijava</i></h3>
                    <p>Prijave su otvorene na ovom <a href="./login.php">linku</a> .
                        <br>
                        Rok za prijavu je 02.09.2019. do 12h. Rok za uplatu je 02.09.2019.
                        Preuzimanje startnih paketa u Kulturnom centru.
                        <br></p>
                </div>
                <div class="column">
                    <h3><i class="fas fa-info-circle"> Informacije</i></h3>
                    <p>Start i cilj trke su u centru grada, kod gradske uprave. Polumaraton sadrži tri kruga kroz veliki deo Novog Pazara i prolazi pored brojnih kulturno-istorijskih spomenika. 
                        <br>
                        Vremenski limit trke je 3h.</p>
                </div>
            </div>
            


        </div>
    </section>

    <section>
        <div class="thirdSection">
            <h1>Još ovoliko je ostalo do polumaratona!</h1>
            <div class="timer">
                <div class="container-day">
                    <h3 class="day">Time</h3>
                    <h3>Day</h3>
                </div>
                <div class="container-hour">
                    <h3 class="hour">Time</h3>
                    <h3>Hour</h3>
                </div>
                <div class="container-minute">
                    <h3 class="minute">Time</h3>
                    <h3>Minute</h3>
                </div>
                <div class="container-second">
                    <h3 class="second">Time</h3>
                    <h3>Second</h3>
                </div>
            </div>
            <div class="prosleSlike">
                <video  loop muted autoplay>
                    <source src="images/maratonpazarski.mp4">
                </video>
                <p>Pogledajte kako je izgledao start prethodnog Pazarskog polumaratona... <br>
                Nemoj da zakasnite sa prijavom, na sledećem linku možete proveriti da li ste se prijavili i da li je prijava prošla uspešno.
                <br> <a href="./loginCheck.php""><i class="fas fa-user-check">  Proverite vašu prijavu</i></a>
            </p>
            </div>
            <br>
        </div> 
    </section>

    <section>
    <div class="fourthSection">
            <div class="nekiSlider">
            <img name="slide" width="600" height="400">
            </div>
            <div class="counter">
                <h1>Do sada se prijavilo:</h1>
                <div class="phpCounter">
                <?php
             $dbhost = 'localhost';
             $dbuser = 'root';
             $dbpassword = '';
             $dbname = 'maraton11'; 
                $conn=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);


                $sql="SELECT count(jmbg) AS total FROM ucesnici";
                $result=mysqli_query($conn,$sql);
                $values=mysqli_fetch_assoc($result);
                $num_rows=$values['total'];
                echo $num_rows;
                ?>
                </div>
                <div class="porukaCounter">
                    <p>Požurite ako želite i Vi da učestvujete na ovom spektakularnom polumaratonu!</p>
                </div>
            </div>
     </div>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    </section>

    <section>
        <div class="fifthSection">
            <div class="naslovSp">
                <h1>Sponzori</h1>
                </div>
            <div class="sponzori">
                <div class="glavniSp">
                    <img src="images/sponzori/img0.png" alt="">
                    <img src="images/sponzori/img1.jpg" alt="">
                    <img src="images/sponzori/img2.png" alt="">
                </div>
                <div class="drugiSp">
                <img src="images/sponzori/img3.jpg" alt="">
                <img src="images/sponzori/img4.png" alt="">
                <img src="images/sponzori/img5.jpg" alt="">
                <img src="images/sponzori/img6.png" alt="">
                </div>
                <div class="treciSp">
                <img src="images/sponzori/img7.png" alt="">
                <img src="images/sponzori/img8.jpg" alt="">
                <img src="images/sponzori/img9.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footermain">
            <div class="footerfirst">
                    <h3>Pazarski polumaraton d.o.o.</h3>
                    <h3>Vuka Karadzica bb</h3>
                    <h3>tel/fax: (+381 020) 369-0709; 306-5720</h3>
            </div>
            <div class="footersec">
            <ul>
                <li><a href="./index.php">Početna</a></li>
                <li><a href="./ucesnici.php">Učesnici</a></li>
                <li><a href="./galerija.php">Galerija</a></li>
            </ul>
            </div>
            <div class="footerthird">
                <h3>Pratite nas</h3>
                <a href="https://www.facebook.com/pazarskipolumaraton/" target="blank"><i class="fab fa-facebook-square"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>









    <!-- SCROLLL -->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="fas fa-chevron-up "></i>    </a>




    <script src="js/script.js"></script>
    <script>
var i = 0;
var images = []
var time = 2000;

images[0] = 'images/maraton1.jpg'
images[1] = 'images/maraton2.jpg'
images[2] = 'images/maraton3.jpg'
images[3] = 'images/maraton4.jpg'

function changeImg(){
    document.slide.src = images[i];
    if(i<images.length -1){
        i++;
    }else{
        i=0;
    }
    setTimeout("changeImg()", time)
}

window.onload = changeImg;
    </script>
 
 <script>
           // SHOW SCROLL TOP

function scrollTop() {
    const scrollTop = document.getElementById('scroll-top')
    // Kada skrolamo vise od 560 viewport height, dodajemo show-scroll header klasu
    if (this.scrollY >= 560) scrollTop.classList.add('scroll-top');
    else scrollTop.classList.remove('scroll-top')
}

window.addEventListener('scroll', scrollTop)
 </script>

</body>
</html>