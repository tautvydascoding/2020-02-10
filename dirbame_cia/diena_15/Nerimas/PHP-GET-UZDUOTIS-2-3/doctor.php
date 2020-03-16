

<?php
include_once('models/doctors.php');
$numeris = $_GET['nr'];
$gydytojas = getDoctor( $numeris);
print_r($gydytojas); // test
// echo $gydytojas[1] .  $gydytojas[2] ;
echo $gydytojas["name"] .  $gydytojas['lname'] ;



 ?>
