<?php


// 1. sukurti tuscia porjekta (default)

// 2. doctor.php faile parasyti PHP koda:
    $numeris = 2;
    $gydytojas = getDoctor( $numeris);
    print_r(  $gydytojas  ); // test
    //echo $gydytojas[1] .  $gydytojas[2] ;
    // vienas is butu nesuveiks
    echo $gydytojas["name"] .  $gydytojas['lname'] ;


 // 3.1 istaisyti klaida: function 'getDoctors' not found
// 3.1.1 isideti i projekta faila: doctors.php

 //  i  failo virsu  index.php parasyti:
include('models/doctors.php');

// 4. faile  pakeisti $numeris = 3;
// ir paziureti kas bus
// 4. faile  pakeisti $numeris = 4;
