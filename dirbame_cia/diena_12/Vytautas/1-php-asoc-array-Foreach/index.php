<?php
$m = ['vardas' => 'Tomas',
    'amzius' => 21,
    'miestas' => 'Kaunas'
];
$m [5] = 370666666;
$m ["AK"] = 380808000;
foreach ($m as $key => $value) { //naudojamas ir stalciaus pavadinimas
    echo "$key $value <br>";
}
foreach ($m as $value) { //be stalciaus pavadinimo
    // code...
}
 ?>
