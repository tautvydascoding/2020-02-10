<?php

//prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost'); //konstanta - nekintantis elementas
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root');
define('DB_NAME', 'sapnu_gaudykles');
$prisijungimas = mysqli_connect(DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME);
if ($prisijungimas) {
    echo "pavyko prisijungimas prie DB <br>";
}else {
    echo "ERROR: nepavyko prisijungti prie DB: " . mysqli_connect_error;
}

function getPrisijungimas(){
    //isvardinti globalius kinamuosius, kuriuos nori naudoti f-jos viduje
    global $prisijungimas;  //!! sioje eiluteje globaliu kint. negalima keisti, bet galima zemiau
    return $prisijungimas;
}

function deleteSG($nr){
    $manoSQL = "DELETE FROM sapnu_gaudykles WHERE id = '$nr' LIMIT 1";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR nepavyko atleisti sapnu gaudykles nr: $nr <br>";
    }
}
// deleteDoctor(3); //kad veiktu reikia perkraut svetaine, tada issitrina is serverio


/* i DB irasysim nauja gydytoja
$nr - id numeris Duomenu Bazeje
$vardas - gydytojo vardas
$pavarde - gydytojo pavarde
$zona - gyd. zona kurioje aptarnauja pacientus
*/

function createSG($dydis, $spalva, $kaina, $aprasymas){
    $manoSQL = "INSERT INTO doctors VALUES(NULL, '$dydis', '$spalva', '$kaina', '$aprasymas')";
    $arIsikele = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR nepavyko prideti sapnu gaudykles: $dydis, $spalva, $kaina, $aprasymas <br>";
    }
}
//test
// createDoctor('Jurgis', 'Jurgaitis', 'A3');
// createDoctor('Tadas', 'Tadauskas', 'B1');


function editSG($nr, $dydis, $spalva, $kaina, $aprasymas){
    $manoSQL = "UPDATE doctors SET
                                dydis = '$dydis',
                                spalva = '$spalva',
                                kaina = '$kaina',
                                aprasymas = '$aprasymas'
                                WHERE id = 6
                                LIMIT 1
        ";
    $arPasikeite = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPasikeite) {
        echo "ERROR nepavyko prideti sapnu gaudykles: $nr, $dydis, $spalva, $kaina, $aprasymas <br>";
    }
}
// test
// editDoctor(6, 'Petras', 'Petraitis', 'B3');


/*
    paima gydytoja is // DB
    $nr - gydytojo id is DB
    return - (type: ARRAY)
    */
function getSG($nr){
    $manoSQL = "SELECT * FROM sapnu_gaudykles WHERE id = '$nr'";
    //$rezultataiOBJ - Mysql objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        // print_r($rezultataiOBJ);
        //is objekto paimam viena eilute ir paverciam i asociatyvu array
        $rezultARRAY = mysqli_fetch_assoc($rezultataiOBJ);
        // print_r($rezultARRAY);//test
        return $rezultARRAY;
    }else {
        echo "Atleiskite, tokios sapnu gaudykles nera";
        return NULL;
    }

}
//test
// $gyd1 = getDoctor(1);
// print_r($gyd1);
//SGS- sapnu gaudykles!!!!!!!!!
function getSGS(){
    $manoSQL = "SELECT * FROM sapnu_gaudykles";
    //$rezultataiOBJ - Mysql objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
$visosSG = getSGS();
// is Mysqli objekto paima viena eilute ir pavercia i array:
$SG1 = mysqli_fetch_assoc($visosSG);
// $gydytojas2 = mysqli_fetch_assoc($visiGydytojaiOBJ);
// $gydytojas13 = mysqli_fetch_assoc($visiGydytojaiOBJ);
//test
// print_r($gydytojas1);
// echo "<hr>";
// print_r($gydytojas2);
//-------------
while($SG1){
    echo "<h2>". $SG1['dydis']. " ". $SG1['spalva']. "</h2>";
    $SG1 = mysqli_fetch_assoc($visosSG);
}


//
