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

    <div class="container ">
        <header class="row">
            <nav class=" col-md-12 navbar navbar-expand-lg navbar-light bg-light">
                 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-item nav-link active" href="#">Pradzia <span class="sr-only">(current)</span></a>
                      <a class="nav-item nav-link" href="SG-page.php">Sapnu gaudykles</a>
                      <a class="nav-item nav-link" href="#">Kombinuotos sapnu gaudykles</a>
                      <a class="nav-item nav-link disabled" href="#">POM POM gaminiai</a>
                    </div>
                </div>
            </nav>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/sapnu-gaudykles/50.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/sapnu-gaudykles/45.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/sapnu-gaudykles/40.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </header>
            <section class="row">

                <?php
                include ('controllers/sapnu_gaudykles.php');
                $visosSG = getSGS();
                // is Mysqli objekto paima viena eilute ir pavercia i array:
                $SG = mysqli_fetch_assoc($visosSG);
                //-------------
                while($SG ){
                    include ('preke-template.php');
                    $SG = mysqli_fetch_assoc($visosSG);
                }?>
            </section>

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
