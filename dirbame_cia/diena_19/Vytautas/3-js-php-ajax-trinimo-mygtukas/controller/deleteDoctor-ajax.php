<?php
include_once('../models/doctors.php');
// print_r($_POST);
// echo "buvau PHP faile";


$numeris = $_GET['sk'];
$gydytojas = deleteDoctor($numeris);
// print_r($gydytojas);
// php masyva paverciam i JSON js objekta
echo json_encode($gydytojas);
 ?>
