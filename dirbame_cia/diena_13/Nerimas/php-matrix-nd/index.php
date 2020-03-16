
<?php

$darbuotojas =["vardas" => "Alfredas",
"AK" => 39946565646,
"gimData" => "2000-03-02",
"pardavimuKiekis" => 100
];


$auto1 = ['Audi', 250000, 4000, " KNS "];
$auto2 = ['BMW', 300000, 4200, " VLN "];
$auto3 = ['Opel', 150000, 5000, " KLP "];

// 1) uzduotis isvesti i ekrana autos
//         0        1       2
$autos = [$auto1, $auto2, $auto3]; // matrica- MASYVAS masyve

// 1) isvesti i ekrana autos
print_r(    $autos); // isvedimas testuojant
echo "<hr>";

for ($i=0; $i < count($autos) ; $i++) {
    print_r(  $autos[$i]    );
    echo "<br>";
}
echo "<hr>";
for ($i=0; $i <count($autos); $i++) {
    echo $autos[$i][1]  . $autos[$i][3] . "<br>";

}


// 2) Pakeisti Audi rida

$autos[0][1] = 299999;
// 3) pakeisti BMW miesta

$autos[1][3] = "PNVZ";


for ($i=0; $i < count($autos) ; $i++) {
    print_r(  $autos[$i]    );
    echo "<br>";
}
// test ar pavyko
// 4) 

 ?>
