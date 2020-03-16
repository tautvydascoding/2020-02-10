<?php

$m =["vardas" => "Tom",
"amzius" => 21,
"miestas" => "KNS"
];
$m[5] = 3706666;
$m['Ak'] = 380888888;

foreach ($m as $value) {
    echo "$value <br>";
}
foreach ($m as $key => $value) {
    echo "$key  $value <br>";
}

?>
