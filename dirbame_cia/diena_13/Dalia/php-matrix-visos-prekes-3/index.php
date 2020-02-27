<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="css/master.css">
  <!-- UZDUOTIS 2
sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
Antraste, img pavadinimas, kaina, prekes aprasymas -->
<?php

$preke1 = ['Batai', 'nuotrauka', 'Moteriski batai', '100 eur'];
$preke2 = ['Kelnes', 'nuotrauka', 'Dzinsines kelnes', '80 eur'];
$preke3 = ['Kepure', 'nuotrauka', 'Kepure nuo saules', '20 eur'];
$visosPrekes = [$preke1, $preke2, $preke3];


// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
for ($i=0; $i < count($visosPrekes) ; $i++) {
    echo "<article clas ='col-4'>";
    echo "<h2>" . $visosPrekes [$i] [0] . "</h2>";
    echo "img src='img/"$visosPrekes [$i] [1] . "'>";
    echo "<p>" . $visosPrekes [$i] [2] . "</p>" ;
    echo "<a class = 'btn btn-lg  bg-info'>" . $visosPrekes [$i] [3] . "</a>";
    echo "</article>";
}

// ir bootstrap dizaina
// <article clas='col-4'>
//     <h2> ...
//     <img>
//     <p>...
//     <button> ...
//     <a class="btn btn-lg  bg-info"> </a>
// </article>


   // 3 budai nuotraukoms
    // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
?>
