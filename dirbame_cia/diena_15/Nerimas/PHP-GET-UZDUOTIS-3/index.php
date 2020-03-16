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



        <!-- <li> -->



        <!--

// include_once("models/doctors.php");
// $id = 4;
// $gydytojas = getDoctor($id );
// print_r($gydytojas); // test
// // echo $gydytojas[1] .  $gydytojas[2] ;

include_once("models/doctors.php");
$visiGydytojaiOBJ = getDoctors();
$gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ); // is Mysqli OBJ. paima eilute ir pavercia i array/masyva
// $gydytojas2 = mysqli_fetch_assoc($visiGydytojaiOBJ); // is Mysqli OBJ. paima eilute ir pavercia i array/masyva
// $gydytojas3 = mysqli_fetch_assoc($visiGydytojaiOBJ); // is Mysqli OBJ. paima eilute ir pavercia i array/masyva
// // test
// print_r($gydytojas1);
// echo "<hr>";
// // print_r($gydytojas2);
//
while($gydytojas) {
    echo "<h2>". $gydytojas['name']. $gydytojas['lname'] ."</h2>";

$gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);</li>
}

< -->
<aside>
<nav>


<a href="page-doctor.php">
        <?php
        include("Models/doctors.php");
        $visiGydytojaiOBJ = getDoctors();
        // // is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
        $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
        // test
        print_r($gydytojas);
        ?>
    </a>
</nav>
</aside>



    <?php
        //------------------
        $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
        while ($gydytojas == true) {
            // print_r($gydytojas); // test
            echo "<a href='template-doctor.php?aa=$gydytojas[id] '>   $gydytojas[name]   $gydytojas[lname]</a><br>";
            echo "<a href='template-doctor.php?aa={$gydytojas['id']} '>   {$gydytojas['name']}   {$gydytojas['lname']}</a><br>";
            echo "<a href='template-doctor.php?aa=".$gydytojas['id'] ."'>".   $gydytojas['name'] .  $gydytojas['lname']."</a><br>";
            $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
        }

        ?>
</a>

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
