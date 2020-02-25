
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
        <link rel="stylesheet" href="css/css.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>

    <?php

    $kaina = 19.99;
    $antraste = "Kuprine";
    $aprasymas = "juoda";

    ?>

    <div class = "container bg-light">
        <h1>Prekes</h1>

        <div class = "row">
            <?php   
                for ($i=0; $i < 6; $i++) { 
                    include ('template-preke.php'); 
                }  
            ?> 
        </div>
    </div>

<!-- 


// 3.2) index.php faile!! - paleisti FOR cikla 6 kartus include('template-preke.php'); -->

    

    

