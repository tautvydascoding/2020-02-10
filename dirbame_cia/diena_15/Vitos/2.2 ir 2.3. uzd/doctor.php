
<?php
include('models/doctors.php');


// ================2.2.=============
// $numeris = 7;
// $gydytojas = getDoctor( $numeris);
// // print_r ($gydytojas); // parodo visa masyva, jo paprasyta eilute
// // echo $gydytojas[1] .  $gydytojas[2] ; // nesuveikia del stalciu skaiciu
// // // vienas is budu nesuveiks
// echo $gydytojas["FirstName"] .  $gydytojas['LastName'] ; // turi buti su duomenu bazeje naudojamais vardais
// =================================


// ============2.3.==============

$numeris = $_GET['nr'];
print_r($_GET);
$gydytojas = getDoctor( $numeris); // klaida f-jos vardas
// echo $gydytojas[1] .  $gydytojas[2] ;
echo $gydytojas["FirstName"] . $gydytojas['LastName'] ;
