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
                    <h1> PHP uzduotis. include_once </h1>
                </div>
            </header>



<!-- 1.1 index.php faile sukurti 2 kintamuosius $vardas, $pavarde -->
<?php
$vardas = "Juozas";
$pavarde = "Juozaitis";
?>

<!-- 1.2 index.php faile sukurti masyva: 'straipnis' = ['antraste', 'aprasymas', 'data']; -->
<?php
$straipnis = [
    'Sporto naujienos', 
    'Kaune vyko rankinio varzybos tarp Kauno ir Vilniaus komandu. Rezultatu 28-26 laimejo Kauno komanda', 
    '2020-02-27'
    ];
?>


<!-- 2. index.php faile  ideti:
include( 'straipsnis.php'); -->
<?php
for ($i=0; $i < 6; $i++) {   // i galiu naudoti straipsnis.php faile, nes sitame sukuriau
    include ('straipsnis.php');       // ------- i include dedasi ne tokie svarbus failai
    // include_once ('straipsnis.php'); 
    // require ('straipsnis.php');        ------- jei kazko neras, ismes error. 
    // require_once ('straipsnis.php');   -------- i requiew dedasi svarbus failai
}
?>


<!-- 2.1 straipsnis.php faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde -->
<!-- 2.2 straipsnis.php faile sukurti   'container' 'main' 'article' -->


<!-- 
// 2.3 'article' videje sukurti:
// 2.3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
// 2.3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
// 2.3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo) -->




        </div>
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
