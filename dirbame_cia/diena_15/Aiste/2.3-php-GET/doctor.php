<?php
include('models/doctors.php');
// 1. sukurti tuscia porjekta (default)

// 2. doctor.php faile parasyti PHP koda:

// $_GET['']   paima is URL adreso kintamuosius isvardintus uz ?=
// $POST['']   paima is NE URL 

    print_r($_GET); // kas get yra

    echo "<hr>";

    $numeris = $_GET['nr'];
    $gydytojas = getDoctor( $numeris);
    print_r($gydytojas);
    echo "<hr>";
    echo $gydytojas['name'] .  " " . $gydytojas['lname'] ;




// 3. pasileisti Narsykleje si puslapi (doctor.php ne index.php, Narsykles adreso ivedimo lange (paciam gale) prirasyti : doctor.php)
// 3.1 istaisyti klaida: function 'getDoctors' not found
// 3.1.1 isideti i projekta - faila: db_functions.php
// 3.1.2  i  faila  doctor.php parasyti:
// include('db_functions.php');
// 3.1.3 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
    // doctor.php?nr=4

// 4. Narsykles adrese  pakeisti ?nr=3
// 4. Narsykles adrese  pakeisti ?nr=2
// ir paziureti kas bus
