<?php include('index-header.php') ?>

    <div class="container ">
        <header class="row">
            <?php include('nav.php') ?>
            <h1> Sapnu gaudykles </h1>
            <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
</div> -->
        </header>
            <section class="row">

                <?php
                include ('controllers/sapnu_gaudykles.php');

                // $id = $_GET['nr'];
                // $visosFotoOBJ =  getFotos();
                // $foto = mysqli_fetch_assoc($visosFotoOBJ);
                // print_r($foto);

                $visosSG = getSGS();
                // is Mysqli objekto paima viena eilute ir pavercia i array:
                $SG = mysqli_fetch_assoc($visosSG);
                //-------------
                while($SG ){?>
                    <section class="col-md-3">
                    <?php echo "<h3>". "<br>". $SG['dydis']. "<br>". $SG['spalva'] ."<br>".
                    $SG['kaina']."<br>". $SG['aprasymas']."</h3>"; ?>
                    </section>
                    <?php $SG = mysqli_fetch_assoc($visosSG);
                }
                ?>
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
