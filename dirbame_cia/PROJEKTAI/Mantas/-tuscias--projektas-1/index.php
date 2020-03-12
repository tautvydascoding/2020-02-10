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
                    <h1> Tekstai </h1>
                </div>
            </header>
<?php
include 'Models/prisijungimas.php';
// ----------------NUOTRAUKU APRASYMAI--------------------

include 'Models/nuotrauku_aprasymai.php';


$visinuotrauku_aprasymai =  getNuotrauku_aprasymai();
// is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
$nuotrauku_aprasymai = mysqli_fetch_assoc($visinuotrauku_aprasymai);
// test
// print_r($nuotrauku_aprasymai);
// //------------------
while($nuotrauku_aprasymai) {
    echo "<h2>". $nuotrauku_aprasymai['Sukurimo_Data'] . "<br />" . $nuotrauku_aprasymai['Pavadinimas'] ."<br />".  $nuotrauku_aprasymai['Aprasymas']."</h2>";
    $nuotrauku_aprasymai = mysqli_fetch_assoc($visinuotrauku_aprasymai);
}

// -------------PASAKOS--------------

include 'Models/pasakos.php';


$visipasakos =  getpasakos();
// is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
$pasakos = mysqli_fetch_assoc($visipasakos);
// test
// print_r($pasakos);
//------------------
while($pasakos) {
    echo "<h2>". $pasakos['Sukurimo_Data'] . $pasakos['Pavadinimas'] . $pasakos['Pasaka'] ."</h2>";
    $pasakos = mysqli_fetch_assoc($visipasakos);
}






?>
            <footer class="row">
                <div class="col-md-12">
                    2020 footer
                </div>
            </footer>
        </div>
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
