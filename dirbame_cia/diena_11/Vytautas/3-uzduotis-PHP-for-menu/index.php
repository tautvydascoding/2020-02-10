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
        $masyvas = ["home", "about", "gallery", "contact", "blog"];
        print_r($masyvas); //test isveda array //object // string
        var_dump($masyvas); //test isveda array //object // string + type
         ?>

        <div class="container">
            <header class="row">
                <nav class="col-md-12">
                    <ul>
                        <?php for ($i=0; $i < 5; $i++) {
                             echo "<li>" . $masyvas[$i] . "</li>";
                             echo "<li>  $masyvas[$i]  </li>";
                             echo "<li>  {$masyvas[$i]}  </li>";
                             // skirtingi kintamojo isvedimo budai
                        }
                        ?>
                    </ul>
                </nav>
            </header>


            <?php
            $nuotraukos = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg"];
            for ($i=0; $i < count($nuotraukos); $i++) {
                echo "<img src='img/$nuotraukos[$i]' alt='logotipas' width='25%'>";
            }
             ?>
             <img src="img/1.jpg" alt="logotipas" width="25%">



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
