<?php

// prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost'); //define konstanta - nekintantis kintamasis
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', '');
define('DB_NAME', 'hospital2');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME);
// jeigu MAMP'e pakeitet MYSQL porta is 3306 i kitoki, privalot ji nurodyti
//$prisijungimas = mysqli_connect( $DB_HOST, $DB_MYSQL_USER, $DB_MYSQL_PASSWORD, $DB_NAME, 3307);

if ($prisijungimas) {
    echo "pavyko prisijungti prie DB <br>";
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" ;
}

function getPrisijungimas(){
    global $prisijungimas;
    return $prisijungimas;
}
getPrisijungimas();

// ===================
// trinimas
// function deleteDoctor ($nr){
// $manosql = "DELETE FROM doctors WHERE id = '$nr' LIMIT 1";
// mysqli_query (getPrisijungimas(), $manosql);

// if (!$arPavyko){
//     echo "ERROR. nepavyko atleisti gyd nr: $nr <br>";
//     }
// }
// deleteDoctor(13); // reikalingas, tik isjungtas, kad netrintu

// ========================

// kurimas
// function createDoctor ($vardas, $pavarde, $sritis){
// $manosql = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pavarde', '$sritis')";
// mysqli_query (getPrisijungimas(), $manosql);

// if (!$arPavyko){
//     echo "ERROR. nepavyko priimti gyd nr:  <br>";
//     }
// }
// createDoctor('Tomas', 'Tamonis', 'K3'); // reikalingas, tik isjungtas, kad nekurti dublikatu

// INSERT INTO `doctors` (`id`, `FirstName`, `LastName`, `area`) VALUES (NULL, 'Justas', 'Pallionis', 'A3');

// ==================
// Keitimas

// $arPavyko = mysqli_query (getPrisijungimas(), $manosql); // kame problema?

// function updateDoctor ($nr, $vardas, $pavarde, $sritis){
// $manosql = "UPDATE doctors SET FirstName = '$vardas', LastName = '$pavarde', area = '$sritis' WHERE id = '$nr' ";
// mysqli_query (getPrisijungimas(), $manosql);

// if ($arPavyko == false){                             // nepanaudoja f-jos
//     echo "ERROR. nepavyko redaguoti gyd nr: '$nr' <br>";
//     }
// }
// updateDoctor (11, 'Gita', 'Gritaite', 'G5'); //???? phpMyAdmin pakeicia, bet duoda klaida local hosto psl?

// UPDATE `doctors` SET `LastName` = 'Bagdonas', `area` = 'B2' WHERE `doctors`.`id` = 11;

// ================

// function getDoctor ($nr){
// $manosql = "SELECT * FROM doctors WHERE id = '$nr' ";
// $rezultataiOBJ = mysqli_query (getPrisijungimas(), $manosql);
// if (mysqli_num_rows($rezultataiOBJ) > 0) {
//     // print_r($rezultataiOBJ); //test
//     $resultArray = mysqli_fetch_assoc ($rezultataiOBJ);
//     // print_r ($resultArray);
//     return $resultArray;
// } else {
//     echo "Atleiskite, tokio gydytojo nera";
//     return NULL;
// }
// }

// $gyd1 = getDoctor (3);
// print_r ($gyd1);

// =============================

// daug eiluciu

// function getDoctors (){
//     $manosql = "SELECT * FROM doctors";
//     $rezultataiOBJ = mysqli_query (getPrisijungimas(), $manosql);
//     return $rezultataiOBJ;
// }
// $visiGydytojaiOBJ = getDoctors();
// $gydytojas1 = mysqli_fetch_assoc ($visiGydytojaiOBJ);
// $gydytojas2 = mysqli_fetch_assoc ($visiGydytojaiOBJ);
// $gydytojas3 = mysqli_fetch_assoc ($visiGydytojaiOBJ);
//
// print_r ($gydytojas1);
// echo "<hr>";
// print_r ($gydytojas2);


// ====================

// spausdinti visus su -while-

function getDoctors (){
    $manosql = "SELECT * FROM doctors";
    $rezultataiOBJ = mysqli_query (getPrisijungimas(), $manosql);
    return $rezultataiOBJ;
}
$visiGydytojaiOBJ = getDoctors();
$gydytojas = mysqli_fetch_assoc ($visiGydytojaiOBJ);

while ($gydytojas) {
    echo "<h2>".$gydytojas['FirstName'].$gydytojas['LastName']."</h2>";
    $gydytojas = mysqli_fetch_assoc ($visiGydytojaiOBJ);
}
