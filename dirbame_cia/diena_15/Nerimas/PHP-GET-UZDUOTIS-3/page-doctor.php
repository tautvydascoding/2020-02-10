<?php

echo "labas";

include_once("models/doctors.php");
$id = 4;
$gydytojas = getDoctor($id );
print_r($gydytojas); // test
// echo $gydytojas[1] .  $gydytojas[2] ;



 ?>
