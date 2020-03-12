console.log(" as veikiu");

1.5 faile index.php
// susikurti mygtuka "Naujas gydytojas" su "a" linku.
// "a" linkas turi rodyti i :   naujasGydytojas.php?vard=TOMAS&parv=TOMAUSKIS
// pvz:
<a href='naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS'> Kurti Nauja</a>




<!--
 HEAD:uzduotys/diena_16/UZDUOTYS/uzduotys-3.0-php-doctor-register.php
// // createDoctor() paleidimas per narsykle
//
// // 1.1 sukurti PHP faila  naujasGydytojas.php
// // 1.2. faile paleisti:
// include('db_functions.php');
// createDoctor("Juozas", "Juozaitis");
// // 1.3. Narsykleje nueiti:
//     localhost/ ... /naujasGydytojas.php
//
//
// deleteDoctor() paleidimas per narsykle
// // 2.1. sukurti PHP faila  trintiGydytoja.php
// // 2.2. faile paleisti:
// include('db_functions.php');
// deleteDoctor(4);
// // 2.3. Narsykleje nueiti:
//     localhost/ ... /trintiGydytoja.php

// createDoctor() paleidimas per narsykle

// 1.1 sukurti PHP faila  naujasGydytojas.php
// 1.2. faile paleisti:
include('db_functions.php');
createDoctor("Juozas", "Juozaitis");
echo "pacyko sukurti nauja gydytoja<br>";
// 1.3. Narsykleje nueiti:
    localhost/ ... /naujasGydytojas.php -->



<!-- // 2.1. sukurti PHP faila  trintiGydytoja.php
// 2.2. faile paleisti:
include('db_functions.php');
deleteDoctor(4);
echo "pavyko istrinti  gydytoja <br>";
// 2.3. Narsykleje nueiti:
    localhost/ ... /trintiGydytoja.php
