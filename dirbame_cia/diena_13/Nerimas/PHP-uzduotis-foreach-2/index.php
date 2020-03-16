
<?php

$darbuotojas =["vardas" => "Alfredas",
"AK" => 39946565646,
"gimData" => "2000-03-02",
"pardavimuKiekis" => 100
];

print_r($darbuotojas);
foreach ($darbuotojas as $key => $value) {
    echo "$key  $value <br>";
}

$darbuotojas ["pardavimuKiekis"] = 180;
print_r($darbuotojas["pardavimuKiekis"]);

$darbuotojas[0] = " Siaures pr. 131";
echo "<br>";
print_r($darbuotojas[0]);
echo "<br>";

foreach ($darbuotojas as $darbuotojoStalcius ) {
    echo "$darbuotojoStalcius <br>" ;
}


 ?>
