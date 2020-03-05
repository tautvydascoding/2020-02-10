
<?php

require_once('models/doctors.php');

// print_r($_POST);
// echo "buvau php faile";


$k = $_GET['numeris'];
$gydytojas = deleteDoctor($k);
// print_r($gydytojas);

// echo json_encode($gydytojas);

 ?>
