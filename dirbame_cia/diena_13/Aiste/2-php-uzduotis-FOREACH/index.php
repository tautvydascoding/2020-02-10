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

// print_r($darbuotojas); // masyvo arba objekto isvedimas
// var_dump($darbuotojas); // detalus kintamojo arba  masyvo  isvedimas



// 0 ) sukurti asociatyvu masyva uzpildyta duomenimis apie darbuotoja:
// vardas, asmens kodas, gimData, pardavimuKiekis
    $darbuotojas = [
        'vardas' => 'Tom',
        'AK' => 1234456789,
        'gimData' => '1993-10-07',
        'pardavimuKiekis' => 115
    ];


// 1)  isvesti visus duomenis apie darbuotoja
print_r($darbuotojas);
// var_dump($darbuotojas);

echo "<br>";



// 2) pakeisti darbuotojo pardavimu skaiciu i 180

$darbuotojas ['pardavimuKiekis'] = 180;
print_r($darbuotojas);
echo "<br>";



// 3) i stalciu/index 0 ideti  darbuotojo adresa:
//  "Siaures pr. 131"
$darbuotojas ['adresas'] = "Siaures pr. 131";
print_r($darbuotojas);
echo "<br>";



// 4) ismeginti koda:

foreach ($darbuotojas as $darbuotojoStalcius) {    // isves kartu su vardas amzius miestas 5 ak
    echo "$darbuotojoStalcius <br>";
}



print_r($darbuotojas);
echo "<br>";
var_dump($darbuotojas);  // geriau, nes parodo ir koks tipas. ji daugiau naudoja
echo "<br>";



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
