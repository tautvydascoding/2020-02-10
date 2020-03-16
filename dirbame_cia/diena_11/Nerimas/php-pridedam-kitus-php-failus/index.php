
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
        <div class="container">
            <header class="row">
                <div class="col-md-12">
                </div>
            </header>



            <main class="row">
                <div class="col-md-12">
                    tiesiog mainas
                </div>
            </main>
        </div>





<?php
// error "fail to open stream" - jeigu klaida bus!!!!
    // include('header.php');
    // include('main.php');
    // include('footer.php');


    $kaina = 200;
    $antraste = "kazkoks antraste";
    $aprasymas = "kazkoks aprasymas";



for ($i=0; $i < 6; $i++) {
    include('template-preke.php');
}








include('template-preke.php');
?>
