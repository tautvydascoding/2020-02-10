
<?php

$darbuotojas =["vardas" => "Alfredas",
"AK" => 39946565646,
"gimData" => "2000-03-02",
"pardavimuKiekis" => 100
];

$darbuotojas1 =[" Jonas" , " Jonaitis",  1980," Inspektorius"];
$darbuotojas2 =[" Ona", " Onute", 1980," sekretore"];
$darbuotojas3 =[" Kestas"," Kerta", 2001," pavaduotojas"];

$visiDarbuotojai =[$darbuotojas1, $darbuotojas2, $darbuotojas3];

for ($i=0; $i <count($visiDarbuotojai[0]) ; $i++) {
    echo $visiDarbuotojai[0][$i];
}
echo "<hr>";
for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
    echo $visiDarbuotojai[$i][0];
}
echo "<hr>";
for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
    echo $visiDarbuotojai[$i][0];
    echo $visiDarbuotojai[$i][1];
    echo $visiDarbuotojai[$i][2];
    echo $visiDarbuotojai[$i][3];
}
echo "<hr>";

// for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
//     echo $visiDarbuotojai[$i][0] . $visiDarbuotojai[$k][0];
// for ($k=0; $k <count($visiDarbuotojai) ; $k++) {
//     echo $visiDarbuotojai[$k][0];
// }
// for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
//     for ($k=0; $k <count($visiDarbuotojai)[i] ; $k++) {
//         echo $visiDarbuotojai[$i][$k];

//     }
// }

for ($i=0; $i < count($visiDarbuotojai); $i++) {
for ($k=0; $k < count($visiDarbuotojai[$i]); $k++) {
echo $visiDarbuotojai[$i][$k] . " ";
}
echo "<br>";
}
echo "<hr>";











 ?>
