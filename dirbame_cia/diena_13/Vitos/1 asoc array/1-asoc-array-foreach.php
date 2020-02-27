<?php


$m = [
    'vardas' => 'Tom',
    'amzius' => 26,
    'miestas' => 'Kaunas'
];
$m [5] = 370601000001;
$m ['AK'] = 38707070001;


foreach ($m as $key => $value) {
    echo "$value <br>";
}
foreach ($m as $key => $value) {
    echo "$key $value <br>";
}


 ?>
