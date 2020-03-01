<?php

// prisijungimas prie duomenu bazes

define('DB_HOST', 'localhost');  // konstanta - nekintamas kintamasis
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root');
define('DB_NAME', 'hospital2');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD,  DB_NAME , 3307 );


if ($prisijungimas) {
    echo "pavyko prisijungti prie DB <br>";
} else {
    echo "ERROR: nepavyko prisijungti prie DB <br>" . mysqli_connect_error($prisijungimas);
}


// isvardinti globalius kintamuiuosius kuriuos nori naudoti funkcijos viduje
function getPrisijungimas() { 
    global $prisijungimas;  // !! globaliu reiksmiu negalim keisti, bet zemiau galima
    return $prisijungimas;
}

function deleteDoctor($nr) {
    $manoSQL = " DELETE FROM doctors WHERE id = '$nr' LIMIT 1 ";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL) ;
    if ($arPavyko == false) {
        echo "ERROR nepavyko atleisti gydytojo nr: $nr <br>";
    }
}


// i DB itraukti nauja gydytoja:
// $name - vardas gydytojo;
// $lname - pavarde gydytojo; 
// $area = zona, kurioje dirba.


function createDoctor($name , $lname, $area) {
    $manoSQL = " INSERT INTO doctors VALUES (NULL, '$name', '$lname', '$area') ";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL) ;
    if ($arPavyko == false) {
        echo "ERROR nepavyko atleisti gydytojo nr: $name $lname $area <br>";
    }
}

// createDoctor('Tom', 'Hilton', 'M3');
// createDoctor('Jurga', 'Adaite', 'Z2');

// reikia uzkomentuoti, nes kitaip -- kiekviena karta perkrovus vis atsiras nauji darbuotojai

function editDoctor($nr, $name , $lname, $area) {
    $manoSQL = " UPDATE  doctors SET 
                                    name= '$name' , 
                                    lname= '$lname' , 
                                    area= '$area'
                                WHERE id = '$nr' 
                                LIMIT 1
                ";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL) ;
    if ($arPavyko == false) {
        echo "ERROR nepavyko pakeisti gydytojo info nr: $nr $name $lname $area <br>";
    }
}


// editDoctor( 4 , 'Litas' , 'Litaite' , 'Z2');





// paima gydytoja is DB
// $nr - gydytojo id is DB
// return - (type: ARRAY)


function getDoctor( $nr ) {
    $manoSQL = " SELECT * FROM doctors WHERE id= '$nr' ; " ;

 // $rezultataiOBJ - Mysql Objektas
    $rezultataiOBJ = mysqli_query( getPrisijungimas(), $manoSQL );

// ar radom daktara
    if (mysqli_num_rows( $rezultataiOBJ) > 0 ) {    
     
// print_r( $rezultataiOBJ );       // ----- test
// is pbjekto paimam viena eilute ir paverciam i asociatyvu array
        $rezultARRAY = mysqli_fetch_assoc ( $rezultataiOBJ ) ;
            // print_r( $rezultARRAY );       // ----- test
        return $rezultARRAY;
    } else {
        echo "Atleiskite , tokio gydytojo nera" ; 
        return NULL;
    }
}

// $gyd1 = getDoctor(1);
// print_r($gyd1);



function getDoctors() {
    $manoSQL = " SELECT * FROM doctors  " ;
    // $rezultataiOBJ - Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL );
    return $rezultataiOBJ;
}

$visiGydytojaiOBJ = getDoctors();
$gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);



// print_r($gydytojas);
// echo "<hr>";


while($gydytojas) {
    echo "<h2>" .  $gydytojas['name'] . " " . $gydytojas['lname'] . "</h2>";
    $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
}