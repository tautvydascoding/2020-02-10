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
                    <h1> PHP CLASS PRIVATE</h1>
                </div>
            </header>

            <hr>

            <main>

                <?php
                    // UZDUOTIS 1:
                    // sukurti  klase: 'zmogus'

                    // zmogus turi:
                    // private ugis,
                    // private vardas
                    // public f-ja 'getManoUgis()'
                    // public f-ja 'getManoVardas()'
                    // public f-ja 'setManoUgis($x)'
                    // public f-ja 'setManoVardas($x)'
                    //* kintamojo paemimas f-je:    $this->vardas
                    
                    
                    require_once "controller/zmogus.php";
                    
                        // UZDUOTIS 2.1
                        // susikurti  objektus: Monika
                    
                    $Monika = new zmogus();

                    // $Monika->vardas = "Monika";       // ERROR  -----  jos neveiks nes public
                    // $Monika->ugis = 171;

                    
                        // UZDUOTIS 2.2
                        // Atspasudinti varda ir ugi naudojant
                        // f-ja 'getManoUgis()'
                        // f-ja 'getManoVardas()'

                    echo $Monika->getManoUgis();    // 999
                    echo "<br>";
                    echo $Monika->getManoVardas();   // bevarde
                    echo "<br>";


                    $Monika->setManoUgis(171);  // nustato ugi

                    echo $Monika->getManoUgis(); // atspausdins -- 171
                    echo "<br>";

                    
                    $Monika->setManoVardas("Monika"); // nustato varda

                    echo $Monika->getManoVardas(); // atspausdins -- Monika
                    echo "<br>";


                    // UZDUOTIS 3:
                    // susikurti konstruktoriu
                    
                    // UZDUOTIS 3.1:
                    // susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)




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
