<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

        <!-- MANO CSS visada pats zemiausias!!! -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container  bg-light">
             <h1>Isijuk inspect->console</h1>

             <?php

             // 1. sukurti index.php
             // 2. parasyti PHP koda:
                 // $x = $_GET['tekstas'];
                 // echo $x;
             // 3. pasileisti Narsykleje si puslapi
             // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
                 //?tekstas=Mano ivestas tekstas

             // 4. Narsykleje  pakeisti zodi "tekstas" i koki nors kitoki
             // 4.1 istaisyti klaidas index.php faile



                //1.1 gausime error kad toks kintamasis enegzistuoja, iki to laiko kol i url adresa narsykles ivesime uzduotyje nurodyta eilute ?tekstas= ....
                 $x = $_GET['tekstas'];
                 echo $x;



              ?>
        </div>




        <script type="text/javascript" src="libs/jquery-3.4.1.min.js"> </script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js"> </script>
        <!-- MANO JS pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>

     </body>
</html>
