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


<h1>PHP formos - POST</h1>

<main>

    <form class="" action="user.php" method="post">
       <input type="text" name="Vardas" value="" placeholder="Jusu vardas">
       <input type="password" name="passw1" value="" placeholder="Slaptazodis">
       <input type="password" name="passw2" value="" placeholder="Pakartoti slaptazodi">
       <button type="submit" name="button">Registruotis</button>
    </form>
</main>

<?php session_start();
print_r($_SESSION);
 // echo "<div class= 'bg-info'>".$_SESSION['zinute']."</div>";

$_SESSION['zinute'] = "";
 ?>

        </div>
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
