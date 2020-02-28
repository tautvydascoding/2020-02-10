<?php 
// 2. doctor.php faile parasyti PHP koda:
    // $numeris = 2;
    // $numeris = 3;
    $numeris = 4;
    include("Models/doctors.php");
    $gydytojas = getDoctor( $numeris);
    print_r(  $gydytojas  ); // test
    echo $gydytojas["name"] .  $gydytojas['lname'] ;



// 4. faile  pakeisti $numeris = 3;
// ir paziureti kas bus
// 4. faile  pakeisti $numeris = 4;
