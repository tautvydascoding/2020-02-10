
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap linkas -->
    
    <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
    
    <title></title>

    <!-- mano CSS failas turi buti VISADA zemiau nei kiti CSS failai
    todel lengviau butu, jei mano CSS failas butu po TITLE -->

    <link rel="stylesheet" href="../../css/master.css">
</head>
<body>


<h1>projektas</h1>
    
<?php
include ('../models/visos.php');
?>


    <header class="container tarpas-apacia">
        <nav class="row  float">
            <div class="col-2 spalva paddingas tarpas-desine">Home</div>
            <div class="col-2 spalva paddingas tarpas-desine">About</div>
            <div class="col-2 spalva paddingas tarpas-desine">Contact</div>
            <div class="col spalva paddingas">
                <input type="button" value="sign in">
            </div>
            <div class="float-isjungiu"></div>
        </nav>
    </header>

    <section class="container  tarpas-apacia">
        <div class="row hight-col">

            <main class="col-3 spalva tarpas-desine">
                <div class="row paddingas"> 
                    <a href="../../komandos/controller/komandos.php">Komandos</a>
                </div>
                <div class="row paddingas">
                    <a href="tvarkarasciai.php">Tvarkarasciai</a>
                </div>
                <div class="row paddingas">
                    <a href="../../kontaktai/controller/kontaktai.php">Kontaktai</a>
                </div>
            </main>

            <aside class="col spalva">
                <div class="row paddingas">
                    <?php
                        $visosKomandosOBJ =  getTvarkarasciaiVisi();
                        $komandos = mysqli_fetch_assoc($visosKomandosOBJ);
                        // print_r($komandos);
                        while($komandos) {
                        echo "<a href='page-doctor.php?sk=$komandos[ID]'>" . $komandos['ID'] . " " . $komandos['data'] . " " . $komandos['sale'] . " " . $komandos['komandos'] . " " . $komandos['rezultatas'] . "</a>" . "<br>";
                        $komandos = mysqli_fetch_assoc($visosKomandosOBJ);
                        }
                    ?>
                </div>
                <div class="row paddingas">bb</div>
            </aside>

        </div>
    </section>


    <footer class="container spalva">
        <div class="row paddingas">Footer</div>
    </footer>



        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>




    





