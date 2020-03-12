<?php

// prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost'); //define konstanta - nekintantis kintamasis
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root');  // Jei naudoji XAMP, WAMP 'root'-> ''
define('DB_NAME', 'zvakes');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME,3307);
// jeigu MAMP'e pakeitet MYSQL porta is 3306 i kitoki, privalot ji nurodyti
//$prisijungimas = mysqli_connect( $DB_HOST, $DB_MYSQL_USER, $DB_MYSQL_PASSWORD, $DB_NAME, 3307);

if ($prisijungimas) {
<<<<<<< HEAD
    //echo "pavyko prisijungti prie DB <br>";
=======
     echo "pavyko prisijungti prie DB <br>";
>>>>>>> 91f420c023371cb09fc861f5319ce3d07f0f26a5
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
}
function getPrisijungimas() {
    // isvardini globalius kint. kuriuos nori naudoti f-jos viduje
    global $prisijungimas; // !! sioje eilute, globaliu kint. negalima keisti, bet zemiau galima
    return $prisijungimas;
}

function deleteZvake($nr) {
    $manoSQL = "DELETE FROM prekes WHERE id = '$nr'  LIMIT 1";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko atleisti gydytojo nr: $nr <br>";
    }
}
// deleteDoctor(6); // test
/*
    i DB irasysim nauja gydytoja
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/
function createZvake( $pavadinimas, $kaina) {
    $manoSQL = "INSERT INTO  prekes VALUES( NULL, '$pavadinimas', '$kaina' )";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti gydytojo vardas:  $pavadinimas, $kaina <br>";
    }
}
// test
 //createZvake('marmeladas', 15);
// createDoctor('Tadas', 'Tadauskas',  'B2');


/*
    i DB irasysim nauja gydytoja
    $nr - id numeris DUomenu Bazeje
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/
function editZvake($nr, $vardas, $pavarde, $zona) {
    $manoSQL = "UPDATE  prekes SET
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
function getZvake( $nr ) {
    $manoSQL = "SELECT * FROM prekes  WHERE id = '$nr';  ";
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
function getZvakes() {
    $manoSQL = "SELECT * FROM prekes    ";
    // $rezultataiOBJ -  Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
// $visiGydytojaiOBJ =  getDoctors();
// // is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
// $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
// // test
// // print_r($gydytojas1);
// //------------------
// while($gydytojas) {
//     echo "<h2>". $gydytojas['name']. $gydytojas['lname'] ."</h2>";
//     $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
// }
