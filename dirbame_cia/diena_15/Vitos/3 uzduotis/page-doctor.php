

<?php

include('models/doctors.php');

echo "mano daktaras";

$id = $_GET['sk'];
$gydytojas = getDoctor($id);

echo "<h2>".$gydytojas['FirstName'].$gydytojas['LastName']."</h2>";

 ?>
