


<?php
require_once('zmogus.php');

$Monika = new Zmogus();

// echo $Monika->vardas; //cannot access private..

echo $Monika->getManoVardas()."<br />";
$Monika->setManoVardas("Monika");
echo $Monika->getManoVardas();



 ?>
