<?php
require_once('zmogus.php');
$Monika = new Zmogus();
// echo $Monika->vardas; // neiseis pasimti private kintamojo
//bet galim issaukti public f-ja getManoVardas()
echo $Monika->getManoVardas(). "<br>"; //bevarde
$Monika->setManoVardas("Monika");
echo $Monika->getManoVardas(). "<br>"; //Monika
echo "<br />";

echo $Monika->getManoUgis(). "<br>"; //bevarde
$Monika->setManoUgis(150);
echo $Monika->getManoUgis(). "<br>"; //Monika



 ?>
