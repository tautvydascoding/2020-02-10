<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>

        <div class="container">
            <header class="row">
                <div class="col-md-12">
                    <h1> Isijunk Inspect Element->console </h1>
                </div>
            </header>

<?php

include ('zmogus.php');
$Monika = new Zmogus(); // objektas
$Tadas = new Zmogus(); // objektas
$Kestas = new Zmogus(); // objektas
$Monika ->ugis = 155;
$Tadas ->ugis = 180;
$Kestas ->ugis = 179;

echo "Monika" . $Monika-> ugis;
echo "Tadas" . $Tadas-> ugis;
echo "Kestas" . $Kestas-> ugis;
$Monika -> eiti();
$Tadas ->  eiti();
$Kestas -> eiti();



 ?>

            <footer class="row">
                <div class="col-md-12">
                    2020 footer
                </div>
            </footer>
        </div>
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
