<?php

include_once('../models/registrcija.php');
// sitam faile reikia uzkomentuoti teksta prie echo, kad pavyko prisijungti prie DB



// print_r($_POST);
// echo "buvau php faile";


$numeris = $_POST['nr'];
$gydytojas = getDoctor($numeris);


// print_r($gydytojas);  // test


//  uzkoduota masyva, paverciam i js
echo json_encode($gydytojas);



