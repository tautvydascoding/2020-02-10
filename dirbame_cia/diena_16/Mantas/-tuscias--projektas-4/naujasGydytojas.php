<?php

include('models/doctors.php');
print_r ($_GET);
$vard = $_GET ['vardas'];
$parv = $_GET ['pavarde'];
createDoctor ($vard, $parv, "Z2");
