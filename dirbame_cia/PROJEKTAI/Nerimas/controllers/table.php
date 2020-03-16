

<?php
// prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost'); //define konstanta - nekintantis kintamasis
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', '');  // Jei naudoji XAMP, WAMP 'root'-> ''
define('DB_NAME', 'puslapis1');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME);
// jeigu MAMP'e pakeitet MYSQL porta is 3306 i kitoki, privalot ji nurodyti
//$prisijungimas = mysqli_connect( $DB_HOST, $DB_MYSQL_USER, $DB_MYSQL_PASSWORD, $DB_NAME, 3307);

if ($prisijungimas) {
    echo "pavyko prisijungti prie DB <br>";
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
}


//
 function getPrisijungimas() {
    // isvardini globalius kint. kuriuos nori naudoti f-jos viduje
    global $prisijungimas; // !! sioje eilute, globaliu kint. negalima keisti, bet zemiau galima
    return $prisijungimas;
}
function deleteNBA($nr){
    $manoSQL = "DELETE FROM puslapis1 WHERE id = '$nr' LIMIT 1";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    if (!$arPavyko) {
        echo "ERROR: nepavyko istrinti nba puslapio nr: $nr <br>";
    }
}

 // $visosprekesOBJ = getPrekes();
// $preke = mysqli_fetch_assoc($visosprekesOBJ);
// function getPreke( ) {
//     $manoSQL = "SELECT * FROM `prekes` WHERE 1";
//     // $rezultataiOBJ -  Mysql Objektas
//     $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
//     // ar radom gydytoja
//     if (mysqli_num_rows($rezultataiOBJ) > 0) {     // print_r( $rezultataiOBJ ); // test
//         // is Objekto paimam viena eilute ir paverciam i asociatyvu array
//         $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
//         // print_r($resultARRAY); // test
//         return $resultARRAY;
//     } else {
//         echo "Atleiskite , tokios prekes nera";
//         return NULL;
//     }
// }
function getPrekes () {
    $manoSQL = "SELECT * FROM prekes  ";
    // $rezultataiOBJ - Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(),$manoSQL   );
    return $rezultataiOBJ;
}

function createPreke( $Pavadinimas, $Kaina, $Nuolaida, $Pozicija, $Kiekis) {
    $manoSQL = "INSERT INTO prekes VALUES( '$Pavadinimas' , NULL , '$Kaina','$Nuolaida', '$Pozicija', '$Kiekis' )";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti prekes: $Pavadinimas, $Kaina, $Nuolaida, $Pozicija, $Kiekis  <br>";
    }
}
//
// //
// $visosprekesOBJ = getPrekes();
// $Preke = mysqli_fetch_assoc($visosprekesOBJ); // is Mysqli OBJ. paima eilute ir pavercia i array/masyva

// //
// while($Preke) {
//     echo "<h2>". $Preke['Pavadinimas']. $Preke['id'] . $Preke['Kaina'] . $Preke['Nuolaida'] . $Preke['Pozicija']. $Preke['Kiekis']. $Preke['Data']."</h2>";
//     $Preke = mysqli_fetch_assoc($visosprekesOBJ);
// }

function getRegistracija( $nr ) {
    $manoSQL = "SELECT * FROM registracija  WHERE id = '$nr';  ";
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


function createRegistracija($username, $password) {
    $manoSQL = "INSERT INTO  registracija  VALUES( NULL, '$username', '$password')";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti vartotojo: $username, $password <br>";
    }
}


?>
