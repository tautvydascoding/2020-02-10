<?php

$auto1 = ["Audi", 25000, 4000,"KNS"];
$auto2 = ["BMW", 120000, 5000,"VLN"];
$auto3 = ["Opel", 2500, 4000,"KLP"];

$autos = [$auto1, $auto2, $auto3];

print_r ($autos); // atspausdinti
var_dump ($autos);//atspausdinti
echo "<hr />";

for ($i=0; $i < count($autos); $i++) {
    print_r ($autos) [$i];
    echo "<hr />";
    echo "<hr />";
}
for ($i=0; $i < count($autos) ; $i++) {
    // code...

    echo $autos[$i][1] . "  " . $autos[$i][3] . "<br />";
}
echo "<hr />";
// padidinti audi rida

$autos [0][1] -= 3000;
print_r ($autos [0]);

echo "<hr />";

$autos [1][3]= 'PNV';
print_r ($autos [1]);
echo "<hr />";

// UZDUOTIS 1.0
// A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
// B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
// C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
// D. sukurti masyva 'visiDarbuotojai'
// E.   ii masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
//
// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)


$darbuotojas1 = ['Jonas', 'Jonaitis', 1980, 'Inspektorius'];
$darbuotojas2 = ['Ona', 'Onute', 1980, 'sekretore'];
$darbuotojas3 = ['Kestas', 'Kerta', 2001, 'pavaduotojas'];

$visiDarbuotojai = [$darbuotojas1, $darbuotojas2, $darbuotojas3];
// UZDUOTIS 1.1
// isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)

for ($i=0; $i < count($visiDarbuotojai[0]) ; $i++) {
    echo $visiDarbuotojai [0][$i] . "<br />";
}
echo "<hr />";
// UZDUOTIS 1.2
// isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)

for ($i=0; $i < count($visiDarbuotojai) ; $i++) {
    echo $visiDarbuotojai [$i] [0] . "<br />";
}
echo "<hr />";

// UZDUOTIS 1.3
// isvesti visa informacija apie kiekviena  darbuotoja
for ($i=0; $i < count($visiDarbuotojai) ; $i++) {
    echo $visiDarbuotojai [$i] [0] . "<br />";
    echo $visiDarbuotojai [$i] [1] . "<br />";
    echo $visiDarbuotojai [$i] [2] . "<br />";
    echo $visiDarbuotojai [$i] [3] . "<br />";
}
echo "<hr />";
// UZDUOTIS 1.4
// isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)

for ($i=0; $i < count($visiDarbuotojai) ; $i++) {
    for ($k=0; $k < count ($visiDarbuotojai[0]); $k++) {
        echo $visiDarbuotojai [$i][$k]. "<br />";
    }
}
echo "<hr />";
echo "<hr />";
echo "<hr />";

 ?>
