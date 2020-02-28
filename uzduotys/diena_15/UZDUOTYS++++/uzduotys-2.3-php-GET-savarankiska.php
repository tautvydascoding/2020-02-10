<?php

// 1. sukurti tuscia porjekta (default)

// 2. doctor.php faile parasyti PHP koda:
    // $_GET['']   paima is URL adreso kimtamuosius isvardintus uz ?=
    // $_POST['']   paima is NE IS URL
    $numeris = $_GET['nr'];
    $gydytojas = getDoctor( $numeris);
    echo $gydytojas[1] .  $gydytojas[2];
    echo $gydytojas["name"] .  $gydytojas['lname'] ;


// 3.1 istaisyti klaida: function 'getDoctors' not found
// 3.1.1 isideti i projekta - faila: models/doctors.php
// 3.1.2  i  faila  doctor.php parasyti:
include('models/doctors.php');
// 3.1.3 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
    localhost/..../?nr=4

// 4. Narsykles adrese  pakeisti ?nr=3
// 4. Narsykles adrese  pakeisti ?nr=2
// ir paziureti kas bus
