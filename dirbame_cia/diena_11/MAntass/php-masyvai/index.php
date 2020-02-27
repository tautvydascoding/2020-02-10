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

$meniu = ["home", "about", "gallery", "contact", "blog"];
print_r ($meniu); // isveda array // obj // string
var_dump ($meniu); // test isveda array // obj //string +type

?>
// echo "<nav>";
<nav>
    <ul>
        <?php
            for ($i=0; $i < count($meniu); $i++) {
                echo "<li>" .  $meniu[$i] . "</li>";
                echo "<li>" .  $meniu[$i] . "</li>";
                echo "<li>" .  $meniu[$i] . "</li>";
                    }
                ?>
        </ul>
    </nav>
// }
// echo "</nav>";
<?php
    $fotos = ['1.jpg','2.jpg','3.jpg','4.jpg'];
    // 'img src"="img/1.jpg" alt="logotipas';
for ($i=0; $i <count($fotos); $i++) {
    echo "<img src='img/$fotos[$i]' alt='logotipas' width='25%'>";
    }
    ?>


//
//
// <img src='img/<?php   echo $nuotraukos[0]; ?>' alt=''  />
//
// <div class="row">
//        <?php
//        for ($i=0; $i < count($nuotraukos); $i++) {
//            echo "<div  class='col-4'>
//                    <img  class='img-fluid' src='img/$nuotraukos[$i]' alt=''  />
//                 </div>";
//        }
//    ?>
// </div>

        <!-- // uzduotis 1
        // A. susikurti meniu masyva: home, about, gallery, contact, blog
        // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)


        // uzduotis 2
        // A. susirasti 6 nuotraukas
        // B. susikurti nuotrauku TIK pavadinimu masyva
        // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
        // <img src='./img/1.jpg' alt=''  />
        // <img src='./img/2.jpg' alt=''  />
        // <img src='./img/3.jpg' alt=''  />
        // <img src='./img/4.jpg' alt=''  />


        // <img src='./img/<?php echo $x ?>' alt=''  />

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
</html> -->
