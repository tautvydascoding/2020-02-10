<?php
$m = ['vardas' => 'Tomas',
    'amzius' => 25,
    'miestas' => 'VLN',
];
$m [5] = 378383939;
$m ['Ak'] = 3757583939;

foreach ($m as $key => $value) {
    echo "$value <br />";
    // code...
}
foreach ($m as $key => $value) {
    echo "$key  $value <br />";
}

//
// 0 ) sukurti asociatyvu masyva uzpildyta duomenimis apie darbuotoja:

$darbuotojas = [ 'vardas' => 'Petras',
            'ak' => 123456789,
            'gimData' => '1980.12.31',
            'pardavimuKiekis' => 120
];
foreach ($darbuotojas as $key => $value) {
    print_r ($darbuotojas);

    $darbuotojas ['pardavimuKiekis']= 180;
    print_r ($darbuotojas);
    $darbuotojas ['pardavimuKiekis']= 130;
    print_r ($darbuotojas);

    $darbuotojas ['index'] = "Siaures pr. 131";

    foreach ($darbuotojas as $darbuotojoStalcius ) {
        echo "$darbuotojoStalcius <br>" ;
    }
var_dump($darbuotojas);
}

// vardas, asmens kodas, gimData, pardavimuKiekis
// 1)  isvesti visus duomenis apie darbuotoja
// 2) pakeisti darbuotojo pardavimu skaiciu i 180
// 3) i stalciu/index 0 ideti  darbuotojo adresa:
//  "Siaures pr. 131"
// 4) ismeginti koda:

// foreach ($darbuotojas as $darbuotojoStalcius ) {
//     echo "$darbuotojoStalcius <br>" ;
// }
//
//
// print_r($darbuotojas); // masyvo arba objekto isvedimas
// var_dump($darbuotojas); // detalus kintamojo arba  masyvo  isvedimas

 ?>
