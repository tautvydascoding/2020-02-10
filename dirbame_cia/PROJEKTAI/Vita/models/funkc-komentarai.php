<?php

// include('loginas.php');

// ===========================================================

function getKomentarai() {
    // $commentNewCount = $_POST['commentNewCount'];

    $manoSQL = "SELECT * FROM comments";  // LIMIT $commentNewCount
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
// $visiKomentaraiOBJ =  getKomentarai();
// $komentaras = mysqli_fetch_assoc($visiKomentaraiOBJ);
// // //------------------
// while($gaminys) {
//     echo "<h3>". $gaminys['preke']."</h3>";
//     $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
// }

// ===========================================================
//
// INSERT INTO `comments` (`id`, `author`, `message`) VALUES (NULL, 'martynas', 'gaminys uz prieinama kaina');
function createKomentaras ($vardas, $koment) {
    $manoSQL = "INSERT INTO  comments VALUES (NULL,'$vardas', '$koment')";
    $rezultatas = mysqli_query(getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti komentaro su:  <br>";
    }
}
//
// // ===========================================================

// function deleteGaminys ($nr) {
//     $manoSQL = "DELETE FROM gaminiai WHERE id = '$nr'  LIMIT 1";
//     $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
//     if ( $rezultatas == false) {   // !$arPavyko
//         echo "ERROR nepavyko istrinti nr: $nr <br>";
//     }
// }
// // deleteGaminys(6); // test
//
// // ===========================================================
//
// // UPDATE `gaminiai` SET `preke` = 'kede-8', `aprasas` = 'su minkstu atlosu', `dydis` = '75 cm', `kaina` = '89', `meistro` = 'HJ', `foto` = 'kede8.jpg' WHERE `gaminiai`.`id` = 10;
//
// function updateGaminys ($id, $preke, $aprasas, $dydis, $kaina, $meistro, $foto) {
//     $manoSQL = "UPDATE  gaminiai SET preke = '$preke',
//                                     aprasas = '$aprasas',
//                                     dydis = '$dydis',
//                                     kaina = '$kaina',
//                                     meistro = '$meistro',
//                                     foto = '$foto'
//                                 WHERE id = '$id'
//                                 LIMIT 1";
//     $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
//     if ( $rezultatas == false) {   // !$arPavyko
//         echo "ERROR nepavyko redaguoti prekes nr:  $preke  <br>";
//     }
// }
// // test
// //editDoctor(4,'Litas', 'Litaite',  'Z2');
//
//
// // ===================================================================
//
// /*
//    paima gydytoja is DB
//    $nr - gydytojo id is DB
//    return - (type: ARRAY)
// */
// function getGaminys( $id ) {
//     $manoSQL = "SELECT * FROM gaminiai  WHERE id = '$id';  ";
//     $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
//     if (mysqli_num_rows($rezultataiOBJ) > 0) {
//         $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
//         return $resultARRAY;
//     } else {
//         echo "Atleiskite , tokio gydytojo nera";
//         return NULL;
//     }
// }
//
// // ===================================================================
//
// /
