<?php

include('models/doctors.php');
print_r($_GET);

$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
// $zona = $_GET['Z'];
createDoctor($vardas, $pavarde, "Z2");


// // redirect i kita puslapis
// header("location: index.php");
// exit();


 ?>
