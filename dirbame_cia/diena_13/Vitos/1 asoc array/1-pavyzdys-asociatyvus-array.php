<?php

// 0 ) sukurti asociatyvu masyva uzpildyta duomenimis apie darbuotoja:
// vardas, asmens kodas, gimData, pardavimuKiekis
// 1)  isvesti visus duomenis apie darbuotoja
// 2) pakeisti darbuotojo pardavimu skaiciu i 180
// 3) i stalciu/index 0 ideti  darbuotojo adresa:
//  "Siaures pr. 131"
// 4) ismeginti koda:

$darbuotojas = [
    "vardas" =>'Jonas',
    "ak" => 38307070077,
    "gim" => 1983,
    "pardavimai" => 50];

foreach ($darbuotojas as $reiksme ) {
    echo "$reiksme <br>" ;
}

echo "$darbuotojas[gim] <br>";

print_r($darbuotojas); // masyvo arba objekto isvedimas
var_dump($darbuotojas); // detalus kintamojo arba  masyvo  isvedimas

echo "<br>";

$darbuotojas["pardavimai"] = 180;
print_r($darbuotojas);

echo "<br />";

$darbuotojas[0] = "Siaures pr 131";
print_r($darbuotojas);
