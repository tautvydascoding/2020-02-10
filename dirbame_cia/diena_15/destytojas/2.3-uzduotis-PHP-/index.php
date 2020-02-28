<?php
// 2. doctor.php faile parasyti PHP koda:
    // $numeris = 2;
    // $numeris = 3;
    print_r($_GET); // test

    $numeris = $_GET['nr'];
    include("Models/doctors.php");
    $gydytojas = getDoctor( $numeris);
    print_r(  $gydytojas  ); // test
    echo $gydytojas["name"] .  $gydytojas['lname'] ;

 // URL adrese pakeisti nr
 // pvz: localhost/..../?nr=3
