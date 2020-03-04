<?php


// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas
require_once("Zmogus.php");

$Monika = new Zmogus("monikute" , 180);
echo "Monikos ugis po pakeitimo:  $Monika->ugis  <br />";  //
echo "Monikos vardas po pakeitimo:  $Monika->vardas  <br />";  //
// echo $ugis;  // ERRPOR
// echo "Monikos ugis:  $Monika->ugis  <br />";  //
// $Monika->ugis = 155;
// $Monika->vardas =  "Monika";



$Tadas = new Zmogus("tadulis" , 193);
echo "Tadas ugis po pakeitimo:  $Tadas->ugis  <br />";  //
echo "Tadas vardas po pakeitimo:  $Tadas->vardas  <br />";  //
// $Tadas->ugis = 180;
// $Tadas->vardas =  "Tadas";


$Jonas = new Zmogus("Jonaitis", 150);
echo "Jonas : $Jonas->ugis <hr>";
echo "Jonas : $Jonas->vardas <hr>";

$Karolis = new Zmogus("Karolis", 199);
echo "Ugis : $Karolis->ugis " . "Vardas: $Karolis->vardas <hr>";


// UZDUOTIS 2.1
// Monikos objektui priskirti reiksmes: Monika, 155
// Tado objektui priskirti reiksmes: Tadas, 180
// Kesto objektui priskirti reiksmes: Kestas, 179

// UZDUOTIS 2.2
// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()'
// $Tadas->einu();
