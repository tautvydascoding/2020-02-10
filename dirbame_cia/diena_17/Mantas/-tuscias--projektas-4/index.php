d<!DOCTYPE html>
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
         echo "div class='bg-info'>";
          $_SESSION['zinute'] .
         "</div>";
         $_SESSION['zinute'] = ""; //zinutes istrinimas
?>
        <div class="container">
            <header class="row">
                <div class="col-md-12">
                    <h1> Isijunk Inspect Element->console </h1>
                </div>
            </header>

<!-- vardas, slaptazodis1, slaptazodis2, data, now() -->

<main>
    <form action="controller/registracija.php" method="post">
        Name: <input type="text" name="name" value="TOMAS" placeholder='jusu vardas'>
        Password <input type="password" name="slaptazodis1" value="" placeholder='slaptazodis'>
        Pakartotinas Password <input type="password" name="slaptazodis1" value="" placeholder='slaptazodis'>
        Data <input type="date" name="data" value="" placeholder='laikas'>


<?php
print_r($_SESSION);
echo $_SESSION


 ?>
        <button type="submit" Registracija </button>
    </form>
</main>

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
