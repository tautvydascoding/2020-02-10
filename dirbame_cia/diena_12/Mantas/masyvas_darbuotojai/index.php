<?php

$darbuotojas1 = ['Jonas', 'Jonaitis', 1980, "Inspektorius"];
$darbuotojas2 = ['Ona', 'Onute', 1980, "Sekretore"];
$darbuotojas3 = ["Kestas", "Kerta", 2001, "Pavaduotojas"];

$visiDarbuotojai = [$darbuotojas1, $darbuotojas2, $darbuotojas3];

for ($i=0; $i < count($visiDarbuotojai[0]) ; $i++) {
    echo $visiDarbuotojai[0][$i];
    // code...?>
}

<article width="30%" style="float:left">
<h2> <?php echo $visiDarbuotojai[$i][0]; ?> </h2>
<img src="img/<?php echo $visiDarbuotojai[$i][1]; ?>" alt="">
<p> <?php echo $visiDarbuotojai[$i][3]; ?> </p>;
