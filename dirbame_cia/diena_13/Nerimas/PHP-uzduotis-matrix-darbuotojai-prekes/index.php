
<?php

$preke1 = ["BMX", "1.jpg","390","geras dviratus"];
$preke2 = ["kalnu dviratis", "2.jpg","330","i kalnus gerai vaziuoja"];
$preke3 = ["elektrinis dviratis", "3.jpg","780","elektra varomas"];

$visosPrekes =[$preke1,$preke2,$preke3];

for ($i=0; $i <count($visosPrekes); $i++) {
    echo "<article  width ='30%' style='float:left'  >
    <h2> {$visosPrekes[$i][0]  }</h2>
        <img src='img/1.jpg'. {$visosPrekes[$i][1]}' height = '400px'>
            <p> {$visosPrekes[$i][3]} </p>
        <button>mygtukas</button>
    </article>";
}
// // kitas budas


    for ($i=0; $i <count($visosPrekes); $i++) { ?>
        echo "<article width='30%' style="float:left">;
        echo <h2> <?php echo $visosPrekes[$i][0]; ?> </h2>;
        echo <img src='img/1.jpg'<?php echo $visosPrekes[$i][1]; ?>"alt="">
        echo <p> <?php echo $visosPrekes[$i][3]; ?></p>;
    </article>";
}
  <?php
   ?>
