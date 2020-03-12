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
                    <h1> Isijunk Inspect Element->console </h1>
                </div>
            </header>

<form class="" action="index.html" method="post">
    <button type="Mygtukas" name="Mygtukas"></button>
</form>
<a href='naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS'> Kurti Nauja</a>

<?php

   include_once('models/doctors.php');
   // test
   $visiGydytojai = getDoctors(); // MYSQL objektas
   // // print_r( $visiGydytojai ) ;

   //visu gydytoju isvedimas
   $gyd = mysqli_fetch_assoc($visiGydytojai); // is visu paimame viena
   while ($gyd) {  // false, 0, NULL, ''
       echo $gyd['name'] . " " . $gyd['lname'] ;
       ?>
       <a class="btn bg-danger" href='trintiGydytoja.php?nr=<?php echo $gyd['id']?>'> Istrinti 5 gyd</a> <br>
       <?php
       // is visu paimame sekanti gydytoja
       $gyd = mysqli_fetch_assoc($visiGydytojai);
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
