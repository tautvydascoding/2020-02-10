<?php

$numeris = $_GET['nr'];
include("models/doctors.php");
$gydytojas = getDoctor( $numeris);
// echo $gydytojas[1] .  $gydytojas[2] ;
echo $gydytojas["name"] .  $gydytojas['Lname'] ;


 ?>
