<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="css/master.css">
  <!-- UZDUOTIS 2
sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
Antraste, img pavadinimas, kaina, prekes aprasymas -->
<?php

$preke1 = ['Batai', '1.jpg', 'Moteriski batai', '100 eur'];
$preke2 = ['Kelnes', '1.png', 'Dzinsines kelnes', '80 eur'];
$preke3 = ['Kepure', '2.png', 'Kepure nuo saules', '20 eur'];
$visosPrekes = [$preke1, $preke2, $preke3];


// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
for ($i=0; $i < count($visosPrekes) ; $i++) {
    echo "<article  width='30% style='float:left' >";
    echo "<h2>  {$visosPrekes [$i] [0]} </h2>";
    echo "<img src='img/" . $visosPrekes [$i] [1] . "' width =  '10%' >";
    echo "<p>  {$visosPrekes [$i] [2]}  </p>" ;
    echo "<a class = 'btn btn-lg  bg-info'>" . $visosPrekes [$i] [3] . "</a>";
    echo "</article>";
}
echo "<div style='clear:both;'   > </div>";

for ($i=0; $i < count($visosPrekes) ; $i++) {
    ?>
<article width ="30%" style="float:left">
    <h2>
        <?php echo $visosPrekes [$i][0] ?>
    </h2>

</article>


<?php  }
   // 3 budai nuotraukoms
    // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
?>
