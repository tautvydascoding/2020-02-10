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

// session_start();



 ?>


<!-- // vardas, slaptazodis1, slaptazodis2, data...sql: NOW() - uzpildo automatiskai data -->
<main>
    <form action="registracija.php" method="post">
    <input type="text" name="vardas" value="Tomas" placeholder="jusu vardas">
    <input type="password" name="slaptazodis1" value="" placeholder="jusu slaptazodis">
    <input type="password" name="slaptazodis2" value="" placeholder="pakartotinas slaptazodis">
    <input type="date" name="data" value="" placeholder="laikas">

<input type="hidden" name="kodas" value="54546">
<button type="submit" >Registracija</button>


      <!-- <label for="Vardas">Name:</label>
      <input type="text" id="fname" name="name">
      <label for="Slaptazodis">Password:</label>
      <input type="text" id="lname" name="password">
      <label for="date">Datetime:</label>
      <input type="text" id="lname" name="datetime">
      <input type="submit" value="Registracija"> -->

</form>
<?php


session_start();

// print_r($_SESSION);
echo "<div class='bg-info'>"
. $_SESSION['zinute'] .
"</div>";




 ?>
</main>










        <div class="container">
            <header class="row">
                <div class="col-md-12">
                    <h1> Isijunk Inspect Element->console </h1>
                </div>
            </header>



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
