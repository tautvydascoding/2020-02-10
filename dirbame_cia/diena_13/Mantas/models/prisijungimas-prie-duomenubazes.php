<?php
//
// prisijungimas prie duomenu bazes
define("DB_USER", 'localhost');
define("DB_MYSQL_USER", 'root');
define("DB_MYSQL_PASSWORD", 'root');
define("DB_NAME", 'hospital2');
$prisijungimas = mysqli_connect (DB_USER, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME, 3307);

if ($prisijungimas) {
    echo "pavyko prisijungti prie DB <br>";
}else  {
    echo "nepavyko prisijungti";
}

function getPrisijungimas() {
    global $prisijungimas; //isvardinti globalius kint. kuriuos nori naudoti f-jos viduje
return $prisijungimas;
}

function deleteDoctor($nr) {
    $manoSQL = "DELETE FROM doctors WHERE id = '$nr' LIMIT 1";
 $arPavyko = mysqli_query (getPrisijungimas(), $manoSQL);
if ($arPavyko == false) {
    echo "Error nepavyko atleisti gydytojo nr: $nr <br>";
    }
}

deleteDoctor(5);
createDoctor ('Jurgis', 'Jurgaitis', 'A3');
createDoctor ('Tadas', 'Tadauskas', 'B2');


function createDoctor ($nr, $vardas, $pavarde, $zona){
    $manoSQL = "INSERT INTO doctors VALUES (NULL, 'TOmas', 'Tomaitis', 'A0');
$arPAvyko = mysqli_query (getPrisijungimas(), $manoSQL);
if ($arPavyko == false) {
echo "nepavyko sukurti";
})
