<?php



// 0 ) sukurti asociatyvu masyva uzpildyta duomenimis apie darbuotoja:
// vardas, asmens kodas, gimData, pardavimuKiekis
$darbuotojas = [
    'vardas'        => 'Tom',
    'asmensKodas'   => 388888888,
    'gimData'       => '1990-05-02',
    'pardavimuKiekis'=>  56
];
// 1)  isvesti visus duomenis apie darbuotoja
foreach ($darbuotojas as  $x) {
    echo "$x  <br>";
}
// 2) pakeisti darbuotojo pardavimu skaiciu i 180
$darbuotojas['pardavimuKiekis'] = 180;
// 3) i stalciu/index 0 ideti  darbuotojo adresa:
//  "Siaures pr. 131"
// 4) ismeginti koda:

foreach ($darbuotojas as $darbuotojoStalcius ) {
    echo "$darbuotojoStalcius <br>" ;
}


print_r($darbuotojas); // masyvo arba objekto isvedimas
echo "<hr>";
var_dump($darbuotojas); // detalus kintamojo arba  masyvo  isvedimas
