<?php

include('loginas.php');

// ===========================================================

function createVartotojas ($vardas, $pavarde, $elpastas, $hashed_password) {
    $manoSQL = "INSERT INTO  vartotojai VALUES (NULL,'$vardas', '$pavarde', '$elpastas', '$hashed_password')";
    $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $rezultatas == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti prekes su:  <br>";
    }
}

// INSERT INTO vartotojai VALUES (NULL, 'Jonas', 'Jonaitis', 'kitas@litas.ltu', 'mitas');

// (`id`, `vardas`, `pavarde`, `elpastas`, `slaptaz`)


// ===========================================================

function getElpastai () {
    $manoSQL = "SELECT elpastas FROM vartotojai    ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
// $visiElpastoOBJ =  getElpastai ();
// $elpasto = mysqli_fetch_assoc($visiElpastoOBJ);
// // //------------------
// while($elpasto) {
//     echo "<h3>". $elpasto['elapstas']."</h3>";
//     $elpasto = mysqli_fetch_assoc($visiGaminiaiOBJ);
// }

// ===========================================================

function getVartotojai () {
    $manoSQL = "SELECT * FROM vartotojai    ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
// $visiVartotojaiOBJ =  getVartotojai ();
// $vartotojas = mysqli_fetch_assoc($visiVartotojaiOBJ);
// // //------------------
// while($vartotojas) {
//     echo "<h3>". $elpasto['elapstas']."</h3>";
//     $vartotojas = mysqli_fetch_assoc($visiVartotojaiOBJ);
// }

// ===========================================

function getVartotojoEmail ( $koks ) {
    $manoSQL = "SELECT * FROM vartotojai  WHERE elpastas = '$koks';  ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio vartotojo nera";
        return NULL;
    }

}

// ===========================================

function getVartotojoSlaptaz ( $pass ) {
    $manoSQL = "SELECT * FROM vartotojai  WHERE slaptaz = '$pass';  ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        $resultARRAY = mysqli_fetch_assoc( $rezultataiOBJ  );
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio vartotojo nera";
        return NULL;
    }

}
