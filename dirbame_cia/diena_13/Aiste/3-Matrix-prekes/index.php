<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>


<?php

    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas


    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina

    $preke1 = ['Dviratis1', '99.jpg', 'Plentinis dviratis', 1200];
    $preke2 = ['Dviratis2', '99.jpg', 'Kalnu dviratis', 800];
    $preke3 = ['Dviratis3', '99.jpg', 'Vaikiskas dviratis', 200];
    $preke4 = ['Dviratis4', '99.jpg', 'dviratis', 300];
    $preke5 = ['Dviratis5', '99.jpg', 'Vdviratis', 400];



    // B. i masyva visosPrekes, ideti "preke" masyva

    $visosPrekes = [$preke1, $preke2, $preke3, $preke4, $preke5];


    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
    // ir bootstrap dizaina


    // <article clas='col-...'>
    //     <h2> ...
    //     <img>
    //     <p>...
    //     <button> ...
    //     <a class="btn btn-lg  bg-info"> </a>
    // </article>




    // 1 budas isvedimo
    for ($i=0; $i < count($visosPrekes); $i++) { 
        echo " <article >";
        echo "      <h2>" . $visosPrekes[$i][0] . "</h2>";
        echo "      <img width='30%' src='img/" . $visosPrekes[$i][1] . "'>"; // svarbi vieta del kabuciu 
        echo "      <p>" . $visosPrekes[$i][2] . '</p>';
        echo "      <a class='btn btn-lg  bg-info'>" . $visosPrekes[$i][3] . "</a>";
        echo "</article>";
     }



     echo "<hr>";

    // 2 budas isvedimo
     for ($i=0; $i < count($visosPrekes) ; $i++) { 
        echo "<article >
                <h2>    {$visosPrekes[$i][0]}            </h2>
                <img   width='30%' src='img/{$visosPrekes[$i][1]}'      >
                <p>     {$visosPrekes[$i][2]}             </p>
                <a class='btn btn-lg  bg-info'>  {$visosPrekes[$i][3]}  </a>
            </article>";
     }

     echo "<hr>";



    // 3 budas isvedimo
for ($i=0; $i < count($visosPrekes); $i++) {  
    ?>

    <article width='30%' style='float:left' >
        <h2>        <?php echo  $visosPrekes[$i][0];?>      </h2>
        <p>         <?php echo  $visosPrekes[$i][2];?>      </p>
    </article>

<?php } ?> 






<?php


    // <!-- for ($i=0; $i < count($visosPrekes) ; $i++) :
    //         if (true) :
    //             foreach ($visosPrekes as $key => $value) :

    //             endforeach;
    //         else:

    //         endif;
    // endfor; -->


    //    // 3 budai nuotraukoms
    //     // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    //     // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); -->



    ?> 

        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
