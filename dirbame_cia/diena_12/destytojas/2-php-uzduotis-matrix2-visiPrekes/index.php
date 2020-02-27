

<?php
    // UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas
    // Antraste, img pavadinimas, kaina, prekes aprasymas
    // Antraste, img pavadinimas, kaina, prekes aprasymas
    $preke1 = ["BMX dviratis", '1.jpg', 1450, "2 klases dviratis" ];
    $preke2 = ["Kalnu dviratis", '2.jpg', 1150, "pritaikytas aktyviam laisvalaikiui" ];
    $preke3 = ["Miesto dviratis", '3.jpg', 600, "Greitas ir lengvas -viska ko reikia" ];

    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // B. i masyva visosPrekes, ideti "preke" masyva
    $visosPrekes = [$preke1, $preke2, $preke3];

    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
    // ir bootstrap dizaina
    // for ($i=0; $i < 3; $i++) {
    for ($i=0; $i < count($visosPrekes); $i++) {
        echo "<article    width='30%' style='float:left'   >";
        echo "    <h2>". $visosPrekes[$i][0] ."</h2>";
        echo "    <img src='img/" . $visosPrekes[$i][1] . "'>";
        echo "    <p>". $visosPrekes[$i][3] ."</p>";
        echo "</article>";
    }
    echo "<div style='clear:both;'    > </div>";  // isjungima float
    echo "<hr>"; // linija - skirtukas

    // 2 budas isvedimo
    for ($i=0; $i < count($visosPrekes); $i++) {
        echo "<article    width='30%' style='float:left'   >
                <h2>   {$visosPrekes[$i][0]}        </h2>
                <img  src='img/{$visosPrekes[$i][3]}'  >
                <p>    {$visosPrekes[$i][3]}           </p>
             </article>";
    }
    echo "<div style='clear:both;'    > </div>";  // isjungima float
    echo "<hr>"; // linija - skirtukas


    // 3 budas isvedimo
    for ($i=0; $i < count($visosPrekes); $i++) {
    ?>
        <article width='30%' style="float:left">
            <h2>          <?php echo $visosPrekes[$i][0]; ?>     </h2>
            <img src="img/<?php   echo $visosPrekes[$i][1]; ?> " alt="">
            <p>             <?php echo $visosPrekes[$i][3]; ?>     </p>
        </article>

    <?php } ?>

    <?php



    // <article clas='col-...'  width='30%'>
    //     <h2> ...
    //     <img>
    //     <p>...
    //     <button> ...
    //     <a class="btn btn-lg  bg-info"> 100 Eur</a>
    // </article>


       // 3 budai nuotraukoms
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);
