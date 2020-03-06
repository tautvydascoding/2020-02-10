
<?php

require_once('models/doctors.php');

// print_r($_POST);
// echo "buvau php faile";


$numeris = $_POST['sk'];
$gydytojas = getDoctor($numeris);
// print_r($gydytojas);

echo json_encode($gydytojas);

 ?>
