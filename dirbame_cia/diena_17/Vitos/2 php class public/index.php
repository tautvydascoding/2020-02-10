
<!--
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..."

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas

// UZDUOTIS 2.1
Monikos objektui priskirti reiksmes: Monika, 155
Tado objektui priskirti reiksmes: Tadas, 180
Kesto objektui priskirti reiksmes: Kestas, 179

// UZDUOTIS 2.2
// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()' -->


<?php
include('zmogus.php');

$Monika = new Zmogus();

echo "vardas".$Monika->vardas;

$Monika -> vardas="x";
$Monika -> ugis=177;
$Monika -> ugis=177;

 echo "ugis".$Monika->ugis."<br />";
 echo "vardas".$Monika->vardas."<br />";
 echo "funkcija".$Monika->eiti();


$Tadas = new Zmogus();
$Tadas -> ugis=189;

$Kestas = new Zmogus();
$Kestas -> ugis=194;

 ?>
