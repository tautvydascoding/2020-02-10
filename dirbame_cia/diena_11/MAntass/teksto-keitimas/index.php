<?php


$auto1 = ['Audi', 250000, 4000, "KNS"];
$auto2 = ['BMW', 30000, 4200, "VLN"];
$auto3 = ['Opel', 150000, 5000, "KNS"];

$autos = [$auto1, $auto2, $auto3]; // matrica - masyvas masyve

// 1) uzduotis isvesti i ekrana darbuotojoStalcius
// print_r($autos);
// echo "<hr>"

for ($i=0; $i < count($autos); $i++) {
    print_r($autos[$i]);
    echo "<br>";
    // code...

    echo $autos[$i][1] .  "  " . $autos[$i][0]  . "<br>";
}  //isvedimas testuojam

$autos[0][1] = 299999;

$autos[1][3] = "Klaipeda";
// 2) pakeisti Audi parsideda
// 3) pakeisti BMW miesta
