<?php

$preke1 = ["Spinta", "pav1.jpg", 444, "Spintos aprasymas"];
$preke2 = ["Siurblys", "pav2.jpg", 555, "Siurblio aprasymas"];
$preke3 = ["Sviestuvas", "pav3.jpg", 777, "Sviestuvo aprasymas"];


$prekes = [$preke1, $preke2, $preke3];
// isspausdina visa masyva
// for ($i=0; $i < count($prekes); $i++) {
//     for ($k=0; $k < count($prekes[$i]) ; $k++) {
//         echo $prekes[$i][$k];
//     }
//     echo "<br>";
// }
// echo "<hr>";


// // pirmas variantas
for ($i=0; $i < count($prekes); $i++) {
    echo "<article  width='40%' >"; //style='float:left'
    echo "<h2>".$prekes[$i][0]."</h2>";
    echo "<img src='img/" .$prekes[$i][1]."' width='200px'>";
    echo "<p>".$prekes[$i][3]."</p>";
    echo "</article>";
}
// echo "<div style='clear:both'";
echo "<hr>";

// antras variantas
for ($i=0; $i < count($prekes); $i++) {
    echo "<article>
        <h2>{$prekes[$i][0]}</h2>
        <img src='img/{$prekes[$i][1]}' width='10%'>
        <p>{$prekes[$i][3]}</p>
    </article>";
}
echo "<hr>";


// trecias variantas - uzdaryti php dali

for ($i=0; $i < count($prekes); $i++) { ?>
    <article class='col-md-12' width='30%'>
        <h2> <?php echo $prekes[$i][0]; ?>  </h2>
        <img src="img/<?php echo $prekes[$i][1];  ?>" width='30%'>
        <p>  <?php echo $prekes[$i][3]; ?> </p>
        <a class="btn btn-lg  bg-info">Kaina</a>
    </article>

<?php }

// echo "<hr>";


// kopija
// for ($i=0; $i < count($prekes); $i++) {
//     echo "<article class='col-md-12' width='30%'>";
//     echo "<h2>".$prekes[$i][0]."<h2>";
//     echo "<img src='img/" .$prekes[$i][1]."' width='10%'>";
//     echo "<p>".$prekes[$i][3]."<p>";
//     echo "</article>";
// }


// kazkur klaida...
// for ($i=0; $i < count($prekes); $i++) {
//     echo "'<article width=30%>'.'</article>'";
//     echo "'<h2>'.'</h2>'";
//     echo "'<img>'";
//     echo "'<p>'.'</p>'";
//     echo "'<a class="btn btn-lg  bg-info">'.'</a>'";
// }
// echo "<hr>";




 ?>
