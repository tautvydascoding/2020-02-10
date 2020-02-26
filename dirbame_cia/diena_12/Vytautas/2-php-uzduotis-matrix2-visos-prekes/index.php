


<?php

// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas
$preke1 = ["auto ratas", "ratas.jpg", 50, "puikus auto ratas"];
$preke2 = ["auto vairas", "vairas.jpg", 70, "puikus auto vairas"];
$preke3 = ["auto filtras", "filtras.jpg", 30, "dyzelinio variklio filtras"];
// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
$visosPrekes = [$preke1, $preke2, $preke3];
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
// ir bootstrap dizaina
for ($i=0; $i < count($visosPrekes); $i++) {
    echo "<article width='30%' style='float:left'>";
    echo "<h2>". $visosPrekes[$i][0] ."</h2>";
    echo "<img src='img/" . $visosPrekes[$i][1] . "'>";
    echo "<p>". $visosPrekes[$i][3] . "</p>";
    echo "<button>" . $visosPrekes[$i][2] . "</button>";
    echo "</article>";
}
echo "<div style='clear:both;'> </div>"; //isjungiam float
    echo "<hr>";

// 2 budas isvedimo
// for ($i=0; $i < count($visosPrekes); $i++) {
//     echo "<article width='30%' style='float:left'>
//     <h2> {$visosPrekes[$i][0]} </h2>
//
//     </article>";
// }

// 3 budas isvedimo
for ($i=0; $i < count($visosPrekes); $i++) { ?>
    <article width='30%' style="float:left">
        <h2>   <?php echo $visosPrekes[$i][0]; ?>  </h2>
        <img src="img/<?php  echo $visosPrekes[$i][1]; ?> " alt="">
        <p> <?php  echo $visosPrekes[$i][3]; ?>   </p>
    </article>
    <?php } ?>
<?php
// <article clas='col-...' width='30%'>
//     <h2> ...
//     <img>
//     <p>...
//     <button> ...
//     <a class="btn btn-lg  bg-info"> </a>
// </article>
//
//
//    3 budai nuotraukoms
//     printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
//     printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
