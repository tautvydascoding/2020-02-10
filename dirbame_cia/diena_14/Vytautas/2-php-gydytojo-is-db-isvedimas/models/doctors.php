<?php

//prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost'); //konstanta - nekintantis elementas
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root');
define('DB_NAME', 'hospital2');
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

function deleteDoctor($nr){
    $manoSQL = "DELETE FROM doctors WHERE id = '$nr' LIMIT 1";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR nepavyko atleisti gydytojo nr: $nr <br>";
    }
}
// deleteDoctor(3); //kad veiktu reikia perkraut svetaine, tada issitrina is serverio


/* i DB irasysim nauja gydytoja
$nr - id numeris Duomenu Bazeje
$vardas - gydytojo vardas
$pavarde - gydytojo pavarde
$zona - gyd. zona kurioje aptarnauja pacientus
*/

function createDoctor($vardas, $pavarde, $zona){
    $manoSQL = "INSERT INTO doctors VALUES(NULL, '$vardas', '$pavarde', '$zona')";
    $arIsikele = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR nepavyko prideti gydytojo: $vardas, $pavarde, $zona <br>";
    }
}
//test
// createDoctor('Jurgis', 'Jurgaitis', 'A3');
// createDoctor('Tadas', 'Tadauskas', 'B1');


function editDoctor($nr, $vardas, $pavarde, $zona){
    $manoSQL = "UPDATE doctors SET
                                name = '$vardas',
                                lname = '$pavarde',
                                area = '$zona'
                                WHERE id = 6
                                LIMIT 1
        ";
    $arPasikeite = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPasikeite) {
        echo "ERROR nepavyko prideti gydytojo: $nr, $vardas, $pavarde, $zona <br>";
    }
}
// test
// editDoctor(6, 'Petras', 'Petraitis', 'B3');


/*
    paima gydytoja is // DB
    $nr - gydytojo id is DB
    return - (type: ARRAY)
    */
function getDoctor($nr){
    $manoSQL = "SELECT * FROM doctors WHERE id = '$nr'";
    //$rezultataiOBJ - Mysql objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        // print_r($rezultataiOBJ);
        //is objekto paimam viena eilute ir paverciam i asociatyvu array
        $rezultARRAY = mysqli_fetch_assoc($rezultataiOBJ);
        // print_r($rezultARRAY);//test
        return $rezultARRAY;
    }else {
        echo "Atleiskite, tokio gydytojo nera";
        return NULL;
    }

}
$gyd1 = getDoctor(1);
print_r($gyd1);
