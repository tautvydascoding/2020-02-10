<?php

// include('loginas.php');

// ===========================================================

function getApiemus() {
    $manoSQL = "SELECT * FROM apiemus   ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
// $visiTeigApiemusOBJ =  getApiemus();
// $teiginys = mysqli_fetch_assoc($visiTeigApiemusOBJ);
// // //------------------
// while($teiginys) {
//     echo "<h3>". $teiginys['mintis']."</h3>";
//     $teiginys = mysqli_fetch_assoc($visiTeigApiemusOBJ);
// }

// ===========================================================








// ================================================================

function deleteDoctor($nr) {
    $manoSQL = "DELETE FROM doctors WHERE id = '$nr'  LIMIT 1";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko atleisti gydytojo nr: $nr <br>";
    }
}
// deleteDoctor(6); // test
/*
    i DB irasysim nauja gydytoja
    $vardas - gydytojo vardas
    $pavarde - gyd. pavarde
    $zona - gyd. zona kurios pacientus aptarnauja
*/

// ===========================================================

function createDoctor($vardas, $pavarde, $zona) {
    $manoSQL = "INSERT INTO  doctors VALUES( NULL, '$vardas', '$pavarde', '$zona' )";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti gydytojo vardas: $vardas, $pavarde, $zona <br>";
    }
}
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


function editDoctor($nr, $vardas, $pavarde, $zona) {
    $manoSQL = "UPDATE  doctors SET
                                    name= '$vardas',
                                    lname = '$pavarde',
                                    area = '$zona'
                                WHERE id = '$nr'
                                LIMIT 1
                ";
    $arPavyko = mysqli_query( getPrisijungimas(),  $manoSQL  );
    if ( $arPavyko == false) {   // !$arPavyko
        echo "ERROR nepavyko redaguoti gydytojo nr:$nr, $vardas, $pavarde, $zona <br>";
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
function getDoctor( $nr ) {
    $manoSQL = "SELECT * FROM doctors  WHERE id = '$nr';  ";
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
