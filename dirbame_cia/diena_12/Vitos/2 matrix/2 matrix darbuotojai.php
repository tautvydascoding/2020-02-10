<?php


$darbuotojas1= ['Jonas', 'Jonaitis', 1980, 'Inspektorius'];

foreach ($darbuotojas1 as $key => $value) {
    echo "$value <br>";
}

echo "<hr />";

$darbuotojas2= ['Ona', 'Onute', 1983, 'sekretore'];

foreach ($darbuotojas2 as $key => $value) {
    print_r ("$value <br>");
}

echo "<hr />";

$darbuotojas3= ['Kestas', 'Kerta', 1986, 'pavaduotojas'];

foreach ($darbuotojas3 as $key => $value) {
    echo "$value <br>";
}
echo "<hr />";


$visiDarbuotojai=[$darbuotojas1, $darbuotojas2, $darbuotojas3];
// foreach ($visiDarbuotojai as $key => $value) {
//     echo "$value <br>";
// }

echo "<hr />";

// 1.1. uzduotis
for ($i=0; $i < count($visiDarbuotojai[0]); $i++) {
    echo $visiDarbuotojai[0][$i];
}
echo "<hr />";

// 1.2. uzduotis
for ($i=0; $i < count($visiDarbuotojai); $i++) {
    echo $visiDarbuotojai[0][$i];
}
echo "<hr />";

// 1.3. uzduotis
for ($i=0; $i < count($visiDarbuotojai); $i++) {
    echo $visiDarbuotojai[$i][0];
    echo $visiDarbuotojai[$i][1];
    echo $visiDarbuotojai[$i][2];
    echo $visiDarbuotojai[$i][3];
    echo "<br>";

}
echo "<hr />";

// 1.4. uzduotis

for ($i=0; $i < count($visiDarbuotojai); $i++) {
    for ($k=0; $k < count($visiDarbuotojai[$i]) ; $k++) {
        echo $visiDarbuotojai[$i][$k];

    }
    echo "<br>";
}

// for ($i=0; $i < count($visiDarbuotojai); $i++) {
// for ($k=0; $k < count($visiDarbuotojai[$i]); $k++) {
// echo $visiDarbuotojai[$i][$k] . " ";
// }
// echo "<br>";
// }
// echo "<hr>";
