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
                    <h1> Isijunk Inspect Element->console </h1>
                </div>
            </header>
                <!-- vardas, slaptazodis1, slaptazodis2, data, sql: NOW() -->
                <main>
                    <form action="controller/registracija.php" method="post">
                        <input type="text" name="vardas" value="Tomas" placeholder="jusu vardas">
                        <input type="password" name="slaptazodis1" value="" placeholder="jusu slaptazodis">
                        <input type="password" name="slaptazodis2" value="" placeholder="pakartoti slaptazodi">
                        <input type="date" name="data" value="" placeholder="laikas">
                        <!-- slaptas kodas, kurio klientas nemato -->
                        <input type="hidden" name="kodas" value="54546">
                        <button type="submit"> Registracija </button>
                    </form>
                    <?php
                        // print_r($_SESSION); test
                        echo "<div class='bg-info'>" .
                        $_SESSION['zinute'] .
                        "</div>";
                        //zinutes istrinimas
                        $_SESSION['zinute'] = "";
                     ?>

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
