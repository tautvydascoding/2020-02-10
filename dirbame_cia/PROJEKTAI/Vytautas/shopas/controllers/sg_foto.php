<?php
include ("prisijungimas.php");

function getFoto($nr){
    $manoSQL = "SELECT * FROM sapnu_gaudykles WHERE id = '$nr'";
    //$rezultataiOBJ - Mysql objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    if (mysqli_num_rows($rezultataiOBJ) > 0) {
        // print_r($rezultataiOBJ);
        //is objekto paimam viena eilute ir paverciam i asociatyvu array
        $rezultARRAY = mysqli_fetch_assoc($rezultataiOBJ);
        // print_r($rezultARRAY);//test
        return $rezultARRAY;
    }else {
        echo "Atleiskite, tokios nuotraukos nera";
        return NULL;
    }

}
