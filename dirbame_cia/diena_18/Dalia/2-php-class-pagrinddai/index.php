<?php


// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas
require_once("Zmogus.php");
$Justas = new Zmogus("Petrauskas", 190);
$Karolis = new Zmogus("Kurpis", 180);

echo "Karolio ugis: $Karolis->ugis <hr />";
echo "Justo ugis: $Justas->ugis <hr />";

$Monika = new Zmogus("Monikute", 170);
// echo $ugis;  // ERRPOR
echo "MOnikos ugis:  $Monika->ugis  <br />";  //
// $Monika->ugis = 155;
// $Monika->vardas =  "Monika";
echo "MOnikos ugis po pakeitimo:  $Monika->ugis  <br />";  //
echo "MOnikos vardas po pakeitimo:  $Monika->vardas  <br />";  //

$Tadas = new Zmogus("Tadukas", 190);
// $Tadas->ugis = 180;
// $Tadas->vardas =  "Tadas";
echo "Tadas ugis po pakeitimo:  $Tadas->ugis  <br />";  //
echo "Tadas vardas po pakeitimo:  $Tadas->vardas  <br />";  //

// UZDUOTIS 2.1
// Monikos objektui priskirti reiksmes: Monika, 155
// Tado objektui priskirti reiksmes: Tadas, 180
// Kesto objektui priskirti reiksmes: Kestas, 179

// UZDUOTIS 2.2
// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()'
$Tadas->einu();
