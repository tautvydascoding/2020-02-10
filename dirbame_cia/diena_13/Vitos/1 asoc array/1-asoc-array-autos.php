<?php

$auto1 = ["Audi", 250000, 3000, "Vilnius", "pav2.jpg"];
$auto2 = ["BMW", 300000, 4200, "Kaunas", "pav3.jpg"];
$auto3 = ["Audi", 250000, 5000, "Klaipeda", "pav5.jpg"];

$autos = [$auto1, $auto2, $auto3];  //masyvas
echo "<br>";

// isvedimas i ekrana
print_r($autos);
echo "<hr>";

// var_dump($autos);
// echo "<hr>";

// visus masyvus
for ($i=0; $i < count($autos); $i++) {
    print_r($autos[$i]);
}
echo "<hr>";

// visu masyvu, tik ridos reiksmes
for ($i=0; $i < count($autos); $i++) {
    echo $autos[$i][1]. "<br>";
}
echo "<hr>";


// reiksmes - ridas ir miestus
for ($i=0; $i < count($autos); $i++) {
    echo " Rida  ".$autos[$i][1]." miestas  ". $autos[$i][3]. "<br>";
}
echo "<hr>";


// padidinti AUDI rida

$autos [0][1] += 77000;

echo $autos[0][1]. "pakeista rida"."<br>";

for ($i=0; $i < count($autos); $i++) {
    echo " Rida  ".$autos[$i][1]." miestas  ". $autos[$i][3]. "<br>";
}
echo "<hr>";

// padidinti BMW miesta

$autos [1][3] = "Palanga";

echo $autos[1][3]. "pakeistas miestas"."<br>";

for ($i=0; $i < count($autos); $i++) {
    echo " Rida  ".$autos[$i][1]." miestas  ". $autos[$i][3]. "<br>";
}
echo "<hr>";



// ======== ND ===========


// // pirmas variantas
for ($i=0; $i < count($autos); $i++) {
    echo "<article  width='40%' style='float:left'>"; //style='float:left'
    echo "<h2>".$autos[$i][0]."</h2>";
    echo "<h3>".$autos[$i][1]."</h3>";
    echo "<p>".$autos[$i][2]."</p>";
    echo "<h3>".$autos[$i][3]."</h3>";
    echo "</article>";
}
echo "<div style='clear:both'";
echo "<hr>";

// antras variantas
for ($i=0; $i < count($autos); $i++) {
    echo "<article>
        <h2>{$autos[$i][0]}</h2>
        <h2>{$autos[$i][1]}</h2>
        <p>{$autos[$i][2]}</p>
        <h2>{$autos[$i][3]}</h2>
    </article>";
}
echo "<hr>";


// trecias variantas - uzdaryti php dali

for ($i=0; $i < count($autos); $i++) { ?>
    <article class='col' width='30%'>
        <h2> <?php echo $autos[$i][0]; ?>  </h2>
        <h2> <?php echo $autos[$i][1]; ?>  </h2>
        <p>  <?php echo $autos[$i][3]; ?> </p>
        <button type="button" name="button"> <?php echo "Kaina: ".$autos[$i][2]." Eur"; ?>  </button>
        <!-- <a class="btn btn-lg bg-info" style='border: solid 1px blue'>Kaina</a> -->
    </article>

<?php }
