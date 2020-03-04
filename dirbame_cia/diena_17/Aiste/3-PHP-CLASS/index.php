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
        session_start();
    ?>

        <div class="container">

            <header class="row">
                <div class="col-md-12">
                    <h1> PHP CLASS </h1>
                </div>
            </header>

            <hr>

            <main>
                <?php
                    // UZDUOTIS 1:
                    // sukurti  klase: 'zmogus'
                    // zmogus turi: public ugis, public vardas
                    // f-ja 'einu()', kuri daro echo "Einu einu..."

                    // UZDUOTIS 2:
                    // susikurti  objektus: Monika, Tadas, Kestas


                    // UZDUOTIS 2.1
                    // Monikos objektui priskirti reiksmes: Monika, 155
                    // Tado objektui priskirti reiksmes: Tadas, 180
                    // Kesto objektui priskirti reiksmes: Kestas, 179

                    // UZDUOTIS 2.2
                    // Atspausdinti MONIKOS, TADO varda ir ugi
                    // paleisti f-ja 'einu()'

                    include "controller/zmogus.php";

                    $Monika = new zmogus();
                    $Tadas = new zmogus();
                    $Kestas = new zmogus();

                    $Monika->ugis = 155;
                    $Monika->vardas = "Monika";

                    $Tadas->ugis = 180;
                    $Tadas->vardas = "Tadas";

                    $Kestas->ugis = 179;
                    $Kestas->vardas = "Kestas";

                    echo "vardas:" . " " . $Monika->vardas . ", " . "ugis:" . " " . $Monika->ugis . "<br>";
                    $Monika->einu();
                    echo "<hr>";

                    echo "vardas:" . " " . $Tadas->vardas . ", " . "ugis:" . " " . $Tadas->ugis . "<br>";
                    $Tadas->einu();
                    echo "<hr>";

                    echo "vardas:" . " " . $Kestas->vardas . ", " . "ugis:" . " " . $Kestas->ugis . "<br>";
                    $Kestas->einu();
                    echo "<hr>";

                ?>   
            </main>
        </div>
        
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
