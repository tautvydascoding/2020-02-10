<?php

include('models/doctors.php');
$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
// $zona = $_GET['Z'];
createDoctor($vardas, $pavarde, "Z2");


$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
// $zona = $_GET['Z'];
deleteDoctor($vardas, $pavarde, "Z2");








 ?>
