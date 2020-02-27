<?php


$m = [
    'vardas' => 'Tom',
    'amzius' => 21,
    'miestas'=> 'KNS'
];
$m[5] = 370666666;
$m['Ak'] = 38008088888;

foreach ($m as $value) {
    echo "$value <br>";
}
foreach ($m as $key => $value) {
    echo "$key    $value <br>";
}
 ?>
