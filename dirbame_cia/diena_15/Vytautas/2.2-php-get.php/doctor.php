<?php
$numeris = 2;
include("models/doctors.php");
$gydytojas = getDoctor( $numeris);
// echo $gydytojas[1] .  $gydytojas[2] ;
// vienas is butu nesuveiks
echo $gydytojas["name"] .  $gydytojas['Lname'] ;// sitas veiks

 ?>
