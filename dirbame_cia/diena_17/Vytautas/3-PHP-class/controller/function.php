<?php
include_once('zmogus.php');
$Monika = new zmogus();
$Tadas = new zmogus1();

$Monika->ugis = 185;
$Monika->vardas = "Monika";

$Tadas->ugis = 180;
$Tadas->vardas = "Tadas";

echo "vardas"." ".$Monika->vardas. "<br>";
echo "ugis"." ".$Monika->ugis. "<br>";
$Monika->einu();

echo "<br>";

echo "vardas"." ".$Tadas->vardas. "<br>";
echo "ugis"." ".$Tadas->ugis. "<br>";
$Tadas->einu();


 ?>
