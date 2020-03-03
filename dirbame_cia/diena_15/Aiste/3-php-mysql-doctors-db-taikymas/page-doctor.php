<?php
include ('models/doctors.php');


    $id = $_GET['sk'];
    $gydytojas = getDoctor( $id);

    print_r($gydytojas); 
    echo "<hr>";


    echo "<h3>" . $gydytojas['name'] . " " . $gydytojas['lname'] . " " . $gydytojas['area'] . "</h3>";

    
    echo "<hr>";


