<?php

// prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost'); //define konstanta - nekintantis kintamasis
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root');  // Jei naudoji XAMP, WAMP 'root'-> ''
define('DB_NAME', 'paslaugos');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME, 3307);
// jeigu MAMP'e pakeitet MYSQL porta is 3306 i kitoki, privalot ji nurodyti
//$prisijungimas = mysqli_connect( $DB_HOST, $DB_MYSQL_USER, $DB_MYSQL_PASSWORD, $DB_NAME, 3307);

if ($prisijungimas) {
    echo "pavyko prisijungti prie DB <br>";
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
}
function getPrisijungimas() {
    // isvardini globalius kint. kuriuos nori naudoti f-jos viduje
    global $prisijungimas; // !! sioje eilute, globaliu kint. negalima keisti, bet zemiau galima
    return $prisijungimas;
}

function deletenuotrauku_aprasymai($nr) {
    $manoSQL = "DELETE FROM nuotrauku_aprasymai WHERE id = '$nr'  LIMIT 1";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko istrinti aprasymo nr: $nr <br>";
    }
}
deletenuotrauku_aprasymai(2); // test
/*
    i DB irasysim nauja gydytoja
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/
function createnuotrauku_aprasymai($Sukurimo_Data, $Pavadinimas, $Aprasymas, $Reitingas) {
    $manoSQL = "INSERT INTO  nuotrauku_aprasymai VALUES( NULL, '$Sukurimo_Data', '$Pavadinimas', '$Aprasymas', '$Reitingas'  )";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti : $Sukurimo_Data, $Pavadinimas, $Aprasymas, $Reitingas <br>";
    }
}
// test
// createnuotrauku_aprasymai('2012-12-12', 'Pavadinimas', 'Vestuviu fotosesija', '8');
// createDoctor('Tadas', 'Tadauskas',  'B2');


/*
    i DB irasysim nauja gydytoja
    $nr - id numeris DUomenu Bazeje
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/
function editDoctor($nr, $vardas, $pavarde, $zona) {
    $manoSQL = "UPDATE  doctors SET
                                    name= '$vardas',
                                    lname = '$pavarde',
                                    area = '$zona'
                                WHERE id = '$nr'
                                LIMIT 1
                ";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko redaguoti gydytojo nr:$nr, $vardas, $pavarde, $zona <br>";
    }
}
// test
//editDoctor(4,'Litas', 'Litaite',  'Z2');

/*
   paima gydytoja is DB
   $nr - gydytojo id is DB
   return - (type: ARRAY)
*/
function getDoctor( $nr ) {
    $manoSQL = "SELECT * FROM doctors  WHERE id = '$nr';  ";
    // $rezultataiOBJ -  Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    // ar radom gydytoja
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        // print_r( $rezultataiOBJ ); // test
        // is Objekto paimam viena eilute ir paverciam i asociatyvu array
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        // print_r($resultARRAY); // test
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio gydytojo nera";
        return NULL;
    }

}
//test
// $gyd1 = getDoctor(1);
// print_r( $gyd1 );
function getNuotrauku_aprasymai() {
    $manoSQL = "SELECT * FROM getNuotrauku_aprasymai    ";
    // $rezultataiOBJ -  Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
$visinuotrauku_aprasymai =  getNuotrauku_aprasymai();
// is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
$nuotrauku_aprasymai = mysqli_fetch_assoc($visinuotrauku_aprasymai);
// test
print_r($nuotrauku_aprasymai);
// //------------------
while($Nuotrauku_aprasymai) {
    echo "<h2>". $gydytojas['name']. $gydytojas['lname'] ."</h2>";
    $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
// }
