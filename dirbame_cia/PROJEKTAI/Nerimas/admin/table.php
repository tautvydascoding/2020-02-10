

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

// session_start();
// include("../models/prekes.php");
// mysqli_select_db($prisijungimas,'userregister');
// $name=$_POST['user'];
// $pass=$_POST['password'];
// $s="SELECT*FROM userregister WHERE name ='$name'";
// $result=mysqli_query($prisijungimas,$s);
// $num=mysqli_num_rows($result);
// if($num==1){
//     echo "username already taken";
// }else{
//     $reg="insert into userregister(name, password) values('$name','$pass')";
//     mysqli_query($prisijungimas,$reg);
//     echo "registration complete";
//
// }




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

function createPreke( $Pavadinimas, $id, $Kaina, $Nuolaida, $Pozicija, $Kiekis, $Data) {
    $manoSQL = "INSERT INTO  prekes VALUES( NULL, '$Pavadinimas', '$id', '$Kaina','$Nuolaida', '$Pozicija', '$Kiekis', '$Data' )";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti prekes: $Pavadinimas, $id, $Kaina, $Nuolaida, $Pozicija, $Kiekis, $Data <br>";
    }
}
//
// //
// $visosprekesOBJ = getPrekes();
// $Preke = mysqli_fetch_assoc($visosprekesOBJ); // is Mysqli OBJ. paima eilute ir pavercia i array/masyva
//
// //
// while($Preke) {
//     echo "<h2>". $Preke['Pavadinimas']. $Preke['id'] . $Preke['Kaina'] . $Preke['Nuolaida'] . $Preke['Pozicija']. $Preke['Kiekis']. $Preke['Data']."</h2>";
//     $Preke = mysqli_fetch_assoc($visosprekesOBJ);
// }
function getRegistracija () {
    $manoSQL = "SELECT * FROM registracija  ";
    // $rezultataiOBJ - Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(),$manoSQL   );
    return $rezultataiOBJ;
}

function createRegistracija($username, $password) {
    $manoSQL = "INSERT INTO  Registracija VALUES( NULL, '$username', '$password' )";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti prekes: $username, $password<br>";
    }
}


?>
