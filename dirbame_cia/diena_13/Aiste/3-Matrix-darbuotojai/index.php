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
                    <h1> Matrix - 2 </h1>
                </div>
            </header>



<?php

     // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
     $darbuotojas1 = ['Jonas', 'Jonaitis', 1980, 'Inspektorius'];

     // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore

     $darbuotojas2 = ['Ona', 'Onute', 1980, 'Sekretore'];

     // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas

     $darbuotojas3 = ['Kestas', 'Kerta', 2001, 'Pavaduotojas'];

     // D. sukurti masyva 'visiDarbuotojai'
     // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus

     $visiDarbuotojai = [$darbuotojas1, $darbuotojas2, $darbuotojas3];
     


     echo "isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla) <hr>";

     for ($i=0; $i < count($visiDarbuotojai[0]);  $i++) { 
        echo $visiDarbuotojai[0][$i] . "<br>";
     }
     echo "<hr>";




     echo "isvesti visu  darbuotoju tik vardus (naudojant FOR cikla) <hr>";

     for ($i=0; $i < count($visiDarbuotojai) ; $i++) { 
        echo $visiDarbuotojai [$i][0] . "<br>";
     }
     echo "<hr>";




     echo "isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla) <hr>";

     for ($i=0; $i < count($visiDarbuotojai); $i++) { 
        echo $visiDarbuotojai[$i][0] . "<br>";
        echo $visiDarbuotojai[$i][1] . "<br>";
        echo $visiDarbuotojai[$i][2] . "<br>";
     }
     echo "<hr>";




     echo "isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus) <hr>";

     for ($i=0; $i < count($visiDarbuotojai); $i++) { 
        for ($k=0; $k < count($visiDarbuotojai[$i]); $k++) { 
            echo $visiDarbuotojai[$i][$k] . " ";
        }
        echo "<br>";

     }
    echo "<hr>";


    ?> 
        </div>
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
