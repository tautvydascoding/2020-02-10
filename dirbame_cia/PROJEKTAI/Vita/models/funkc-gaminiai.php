<?php

include('loginas.php');

// ===========================================================

function getGaminiai() {
    $manoSQL = "SELECT * FROM gaminiai    ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
// $visiGaminiaiOBJ =  getGaminiai();
// $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
// // //------------------
// while($gaminys) {
//     echo "<h3>". $gaminys['preke']."</h3>";
//     $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
// }

// ===========================================================

function deleteGaminys ($nr) {
    $manoSQL = "DELETE FROM gaminiai WHERE id = '$nr'  LIMIT 1";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko istrinti nr: $nr <br>";
    }
}
// deleteGaminys(6); // test

// ===========================================================

function createGaminys ($preke, $aprasas, $dydis, $kaina, $meistro, $foto) {
    $manoSQL = "INSERT INTO  gaminiai VALUES (NULL,'$preke', '$aprasas', '$dydis', '$kaina', '$meistro', '$foto')";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti prekes su:  <br>";
    }
}

// ===========================================================

// UPDATE `gaminiai` SET `preke` = 'kede-8', `aprasas` = 'su minkstu atlosu', `dydis` = '75 cm', `kaina` = '89', `meistro` = 'HJ', `foto` = 'kede8.jpg' WHERE `gaminiai`.`id` = 10;

function updateGaminys ($id, $preke, $aprasas, $dydis, $kaina, $meistro, $foto) {
    $manoSQL = "UPDATE  gaminiai SET preke = '$preke',
                                    aprasas = '$aprasas',
                                    dydis = '$dydis',
                                    kaina = '$kaina',
                                    meistro = '$meistro',
                                    foto = '$foto'
                                WHERE id = '$id'
                                LIMIT 1";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko redaguoti prekes nr:  $preke  <br>";
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
function getGaminys( $id ) {
    $manoSQL = "SELECT * FROM gaminiai  WHERE id = '$id';  ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio gydytojo nera";
        return NULL;
    }
}

// ===================================================================

//test
// $gyd1 = getDoctor(1);
// print_r( $gyd1 );
function getDoctors() {
    $manoSQL = "SELECT * FROM doctors    ";
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
