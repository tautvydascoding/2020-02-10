<?php

include_once('../models/doctors.php');
// print_r( $_POST );
// echo "buvau PHP faile";

$numeris = $_POST['sk'];
$k = $_GET['numeris'];
deleteDoctor($k);
// print_r($gydytojas); // test
// php masyva paverciam i JSON js objekta
echo istrintas($gydytojas);
