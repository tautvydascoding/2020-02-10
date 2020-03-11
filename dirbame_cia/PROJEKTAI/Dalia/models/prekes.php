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
    // echo "pavyko prisijungti prie DB <br>";
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
}
function getPrisijungimas() {
    // isvardini globalius kint. kuriuos nori naudoti f-jos viduje
    global $prisijungimas; // !! sioje eilute, globaliu kint. negalima keisti, bet zemiau galima
    return $prisijungimas;
}

function deleteItem($nr) {
    $manoSQL = "DELETE FROM prekes WHERE id = '$nr'  LIMIT 1";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko istrinti prekes nr: $nr <br>";
    }
}
// deleteItem(2); // test OK
/*
    i DB irasysim nauja preke
    $kategorija - prekes kategorija
    $pavadinimas - prekes pavadinimas
    $aprasymas - prekes aprasymas
    $kaina - prekes kaina
    $nuolaida - prekes nuolaida
    $pardavejoNr - pardavejas

*/
function createItem($kategorija, $pavadinimas, $aprasymas,$kaina, $nuolaida,$pardavejoNr) {
    $manoSQL = "INSERT INTO  prekes VALUES( NULL, '$kategorija', '$pavadinimas', '$aprasymas','$kaina','$nuolaida', '$pardavejoNr'  )";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti tokios prekes: $kategorija, $pavadinimas, $aprasymas, $kaina, $nuolaida, $pardavejoNr <br>";
    }
}
// test OK
// createItem ('Skalbykle', 'Bosh', 'Skalbykles aprasymas pirmas', 600, 25, 3);
// createItem ('Televizorius', 'LG', 'TV aprasymas pirmas', 400, 5, 3);


/*
    i DB irasysim nauja preke
    $nr - id numeris Duomenu Bazeju
    $kategorija - prekes kategorija
    $pavadinimas - prekes pavadinimas
    $aprasymas - prekes aprasymas
    $kaina - prekes kaina
    $nuolaida - prekes nuolaida
    $pardavejoNr - pardavejas
*/
function editItem($nr, $kategorija, $pavadinimas, $aprasymas, $kaina, $nuolaida, $pardavejoNr ) {
    $manoSQL = "UPDATE  prekes SET
                                    category= '$kategorija',
                                    name = '$pavadinimas',
                                    description = '$aprasymas',
                                    price = '$kaina',
                                    discount = '$nuolaida',
                                    seller_id = '$pardavejoNr'
                                WHERE id = '$nr'
                                LIMIT 1
                ";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko redaguoti prekes:$nr, $kategorija, $pavadinimas, $aprasymas, $kaina, $nuolaida, $pardavejoNr <br>";
    }
}
// test OK
// editItem(1,'Skalbykle', 'LG', 'Skalbykles aprasymas ketvirtas', 300, 5, 2);

/*
   paima preke is DB
   $nr - prekes id is DB
   return - (type: ARRAY)
*/
function getItem( $nr ) {
    $manoSQL = "SELECT * FROM prekes  WHERE id = '$nr';  ";
    // $rezultataiOBJ -  Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    // ar radom preke
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        // print_r( $rezultataiOBJ ); // test OK
        // is Objekto paimam viena eilute ir paverciam i asociatyvu array
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        // print_r($resultARRAY); // test
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokios prekes nera";
        return NULL;
    }

}
//test
// $preke = getItem(1);
// print_r( $preke );
function getItems() {
    $manoSQL = "SELECT * FROM prekes    ";
    // $rezultataiOBJ -  Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
// mysqli_query - sql komanda, kuri daro viska, ka irasome i skliaustus. Siuo atveju $manoSQL, kas reiskia 99 eiluteje sukurtas kintamasis su stringu.
    return $rezultataiOBJ;
}
$visosPrekesOBJ =  getItems();
// is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
$preke = mysqli_fetch_assoc($visosPrekesOBJ);
// test
// print_r($preke);
//------------------
// while($preke) {
//     echo "<h2>". $preke['category']. $preke['name'] . $preke['description'] . $preke['price'] . $preke['discount'] . $preke['seller_id'] . "</h2>";
//     $preke = mysqli_fetch_assoc($visosPrekesOBJ);
// }
