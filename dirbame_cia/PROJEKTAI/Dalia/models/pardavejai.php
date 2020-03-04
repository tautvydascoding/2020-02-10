<?php

// prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost'); //define konstanta - nekintantis kintamasis
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root');  // Jei naudoji XAMP, WAMP 'root'-> ''
define('DB_NAME', 'parduotuve');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME);
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

function deleteSeller($nr) {
    $manoSQL = "DELETE FROM pardavejai WHERE id = '$nr'  LIMIT 1";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko atleisti pardavejo nr: $nr <br>";
    }
}
// deleteSeller(2); // test OK
/*
    i DB irasysim nauja pardaveja
    $vardas - pardavejo vardas
    $pavarde - pardavejo pavarde
    $prekes - pardavejo parduodamos prekes
*/
function createSeller($vardas, $pavarde, $prekes) {
    $manoSQL = "INSERT INTO  pardavejai VALUES( NULL, '$vardas', '$pavarde', '$prekes' )";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti pardavejo vardas: $vardas, $pavarde, $prekes <br>";
    }
}
// test OK
// createSeller('Jurgis', 'Jurgaitis', 'Plansetes');
// createSeller('Tadas', 'Tadauskas',  'Dziovykles');


/*
    i DB irasysim nauja pardaveja
    $nr - id numeris Duomenu Bazeju
    $vardas - pardavejo vardas
    $pavarde - pardavejo pavarde
    $prekes - pardavejo parduodamos prekes
*/
function editSeller($nr, $vardas, $pavarde, $prekes) {
    $manoSQL = "UPDATE  pardavejai SET
                                    name= '$vardas',
                                    lname = '$pavarde',
                                    prekes = '$prekes'
                                WHERE id = '$nr'
                                LIMIT 1
                ";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko redaguoti pardavejo nr:$nr, $vardas, $pavarde, $prekes <br>";
    }
}
// test OK
// editSeller(1,'Jonas', 'Jonaitis',  'Masazuokliai');

/*
   paima pardaveja is DB
   $nr - pardavejo id is DB
   return - (type: ARRAY)
*/
function getSeller( $nr ) {
    $manoSQL = "SELECT * FROM pardavejai  WHERE id = '$nr';  ";
    // $rezultataiOBJ -  Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    // ar radom pardaveja
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        // print_r( $rezultataiOBJ ); // test OK
        // is Objekto paimam viena eilute ir paverciam i asociatyvu array
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        // print_r($resultARRAY); // test
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio paradvejo nera";
        return NULL;
    }

}
//test
// $pard1 = getSeller(1);
// print_r( $pard1 );
function getSellers() {
    $manoSQL = "SELECT * FROM pardavejai    ";
    // $rezultataiOBJ -  Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
// mysqli_query - sql komanda, kuri daro viska, ka irasome i skliaustus. Siuo atveju $manoSQL, kas reiskia 99 eiluteje sukurtas kintamasis su stringu.
    return $rezultataiOBJ;
}
// $visiPardavejaiOBJ =  getSellers();
// // is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
// $pardavejas = mysqli_fetch_assoc($visiPardavejaiOBJ);
// // test
// // print_r($pardavejas);
// //------------------
// while($pardavejas) {
//     echo "<h2>". $pardavejas['name']. $pardavejas['lname'] ."</h2>";
//     $pardavejas = mysqli_fetch_assoc($visiPardavejaiOBJ);
// }
