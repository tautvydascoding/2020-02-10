<?php
include ("header.php");

include ('models/tvarkarasciai.php');
?>



<nav class="container navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Pradžia <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Apie <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="kontaktai.php">Kontaktai <span class="sr-only">(current)</span></a>
      </li> 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Search</button>
    </form>
    <form action="registracija-form.php">
        <input class="btn btn-success my-2 my-sm-0 mr-sm-2" type="submit" value="Prisijungti" method="get">
        <input class="btn btn-info my-2 my-sm-0 mr-sm-2" type="submit" value="Registruotis" method="get">
    </form>
  </div>
</nav>

<section class="container  tarpas-apacia mt-2">
    <div class="row hight-col">

        <main class="col-3 spalva tarpas-desine bg-dark mr-2">
                <div class="row paddingas"> 
                    <a href="komandos.php">Komandos</a>
                </div>
                <div class="row paddingas">
                    <a href="tvarkarasciai.php">Tvarkarasciai</a>
                </div>
                <div class="row paddingas">
                    <a href="">papildomai</a>
                </div>
                <div class="row paddingas">
                    <a href="">papildomai2</a>
                </div>
            </main>

            <aside class="col spalva">
                <div class="row paddingas">
                    <?php
                        $visosKomandosOBJ =  getTvarkarasciaiVisi();
                        $komandos = mysqli_fetch_assoc($visosKomandosOBJ);
                        // print_r($komandos);
                        while($komandos) {
                        echo $komandos['ID'] . " " . $komandos['data'] . " " . $komandos['sale'] . " " . $komandos['komandos'] . " " . $komandos['rezultatas'] .  "<br>";
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




    





