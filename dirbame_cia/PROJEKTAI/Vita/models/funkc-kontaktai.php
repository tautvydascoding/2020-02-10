<?php

// include('loginas.php');

// ===========================================================

function getAdresai() {
    $manoSQL = "SELECT * FROM kontaktai    ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
// $visiAdresaiOBJ =  getAdresai();
// $adresas = mysqli_fetch_assoc($visiAdresaiOBJ);
// // //------------------
// while($adresas) {
//     echo "<h3>". $adresas['miestas']."</h3>";
//     $adresas = mysqli_fetch_assoc($visiAdresaiOBJ);
// }

// ===========================================================


function deleteAdresas ($nr) {
    $manoSQL = "DELETE FROM kontaktai WHERE id = '$nr'  LIMIT 1";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko istrinti kontakto nr: $nr <br>";
    }
}
// deleteAdresas(6); // test

// ===========================================================

// INSERT INTO kontaktai VALUES (NULL, 'Saules g. 14', 'Vilnius', '32456', '+370-656-12345', 'saules@mail.lt');

function createAdresas ($adresas, $miestas, $kodas, $telef, $elpastas) {
    $manoSQL = "INSERT INTO  kontaktai VALUES (NULL,'$adresas', '$miestas', '$kodas', '$telef', '$elpastas')";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti adreso su:  <br>";
    }
}

// ===========================================================

// UPDATE `gaminiai` SET `preke` = 'kede-8', `aprasas` = 'su minkstu atlosu', `dydis` = '75 cm', `kaina` = '89', `meistro` = 'HJ', `foto` = 'kede8.jpg' WHERE `gaminiai`.`id` = 10;

function updateAdresas ($id, $adresas, $miestas, $kodas, $telef, $elpastas) {
    $manoSQL = "UPDATE  kontaktai SET adresas = '$adresas',
                                    miestas = '$miestas',
                                    kodas = '$kodas',
                                    telef = '$telef',
                                    elpastas = '$elpastas',
                                WHERE id = '$id'
                                LIMIT 1";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko redaguoti adreso nr:  $preke  <br>";
    }
}
// test
//editDoctor(4,'Litas', 'Litaite',  'Z2');


// ===================================================================

/*
   paima gydytoja is DB
   $nr - gydytojo id is DB
   return - (type: ARRAY)
*/
function getAdresas( $id ) {
    $manoSQL = "SELECT * FROM kontaktai  WHERE id = '$id';  ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio adreso nera";
        return NULL;
    }
}

// ====






// ================================================================
//
// function deleteDoctor($nr) {
//     $manoSQL = "DELETE FROM doctors WHERE id = '$nr'  LIMIT 1";
//     $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
//     if ( $arPavyko == false) {   // !$arPavyko
//         echo "ERROR nepavyko atleisti gydytojo nr: $nr <br>";
//     }
// }

// deleteDoctor(6); // test
/*
    i DB irasysim nauja gydytoja
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/

// ===========================================================
//
// function createDoctor($vardas, $pavarde, $zona) {
//     $manoSQL = "INSERT INTO  doctors VALUES( NULL, '$vardas', '$pavarde', '$zona' )";
//     $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
//     if ( $arPavyko == false) {   // !$arPavyko
//         echo "ERROR nepavyko sukurti gydytojo vardas: $vardas, $pavarde, $zona <br>";
//     }
// }

// test
// createDoctor('Jurgis', 'Jurgaitis', 'A3');
// createDoctor('Tadas', 'Tadauskas',  'B2');

// ===========================================================

/*
    i DB irasysim nauja gydytoja
    $nr - id numeris DUomenu Bazeje
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/


// function editDoctor($nr, $vardas, $pavarde, $zona) {
//     $manoSQL = "UPDATE  doctors SET
//                                     name= '$vardas',
//                                     lname = '$pavarde',
//                                     area = '$zona'
//                                 WHERE id = '$nr'
//                                 LIMIT 1
//                 ";
//     $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
//     if ( $arPavyko == false) {   // !$arPavyko
//         echo "ERROR nepavyko redaguoti gydytojo nr:$nr, $vardas, $pavarde, $zona <br>";
//     }
// }

// test
//editDoctor(4,'Litas', 'Litaite',  'Z2');


// ===================================================================

/*
   paima gydytoja is DB
   $nr - gydytojo id is DB
   return - (type: ARRAY)
*/
// function getDoctor( $nr ) {
//     $manoSQL = "SELECT * FROM doctors  WHERE id = '$nr';  ";
//     // $rezultataiOBJ -  Mysql Objektas
//     $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
//     // ar radom gydytoja
//     if (mysqli_num_rows($rezultataiOBJ) > 0) {
//         // print_r( $rezultataiOBJ ); // test
//         // is Objekto paimam viena eilute ir paverciam i asociatyvu array
//         $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
//         // print_r($resultARRAY); // test
//         return $resultARRAY;
//     } else {
//         echo "Atleiskite , tokio gydytojo nera";
//         return NULL;
//     }
// }

// ===================================================================

//test
// $gyd1 = getDoctor(1);
// print_r( $gyd1 );
// function getDoctors() {
//     $manoSQL = "SELECT * FROM doctors    ";
//     // $rezultataiOBJ -  Mysql Objektas
//     $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
//     return $rezultataiOBJ;
// }
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
