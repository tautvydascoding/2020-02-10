<?php

require_once('models/doctors.php');
$x = $_GET['aa'];
$gydytojas = getDoctor($x); // array - gydytrojo duomenis is DB

// print_r($gydytojas); // test

echo "<h2>Gydytojas</h2>";
echo "<h3>  $gydytojas[name]   $gydytojas[Lname]</h3>";
