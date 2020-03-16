<?php

$numeris = 3;
include_once("models/doctors.php");
$gydytojas = getDoctor($numeris);
print_r( $gydytojas ); //test
// vienas is butu nesuveiks
echo $gydytojas["name"] .  $gydytojas['lname'] ;




// include('db_functions.php');
 ?>
