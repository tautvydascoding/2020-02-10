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
                    <h1> Matrix - 1 </h1>
                </div>
            </header>

            
            <?php
            
            $auto1 = ['Audi', 250000, 4000, 'KNS'];     
            $auto2 = ['BMW', 300000, 4200, 'VLN'];
            $auto3 = ['Opel', 150000, 5000, 'KNS'];
            
            $autos = [ $auto1, $auto2, $auto3 ];  //matrica - masyvas masyve



            // 1) isvesti i ekrana
            print_r ($autos);
            echo "<hr>";
            
            // isvesti i ekrana
            for ($i=0; $i < count($autos); $i++) { 
                print_r ( $autos[$i] );
                echo "<br>";
            }
            echo "<hr>";


            // isveda masinos RIDA
            for ($i=0; $i < count($autos); $i++) { 
                echo $autos[$i][1] . "<br>";
            }
            echo "<hr>";


            // isveda masinos RIDA ir MIESTA
            for ($i=0; $i < count($autos); $i++) { 
                echo $autos[$i][1] . " " . $autos[$i][3] . "<br>";
            }
            echo "<hr>";


            // 2) pakeisti Audi rida
            $autos[0][1] = 299999;
            print_r ($autos[0]);
            echo "<hr>";


            // 3) pakeisti BMW miesta
            $autos[1][3] = "Klaipeda";
            print_r ($autos[1]);
            echo "<hr>";


            for ($i=0; $i < count($autos); $i++) { 
                print_r ($autos[$i]) . "<br>";
            }
            echo "<hr>";


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
