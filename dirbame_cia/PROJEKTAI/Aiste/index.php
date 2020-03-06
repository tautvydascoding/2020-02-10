<?php
include ("header.php");

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

        </main>

        <aside class="col spalva">

            <div class="row">
                <?php
                    include ('models/naujienos.php');
                    $visosNaujienosOBJ =  getNaujienosVisi();
                    $naujiena = mysqli_fetch_assoc($visosNaujienosOBJ);
                    while($naujiena) {
                        $string = $naujiena['text'];
                        echo "<div class='col-4'>" . 
                                "<div class='thumbnail'>" . 
                                    "<img width='100%' src='img/$naujiena[foto]' alt=''>" .
                                    "<div class='caption'>" . 
                                        "<h5>" . $naujiena['titel'] . "</h5>" . 
                                        "<p>" .substr($string,0,111) . "</p>" .
                                        "<p><a href='naujiena.php?nr={$naujiena['id']}' class='btn btn-dark' role='button'>Skaityti</a> </p>" . 
                                    "</div>" . 
                                "</div>" .
                            "</div>";

                    // echo "<div class='col-6'>" . "<h5>" . $naujiena['titel'] ."</h5>" . substr($string,0,200) . "..." . "<img width='100%' src='img/$naujiena[foto]' alt=''>" . "<hr>". "</div>" ;

                    // echo  "<h5>" . $naujiena['titel'] ."</h5>";
                    // echo substr($string,0,400) . "...";
                    // echo "<img width='100%' src='img/$naujiena[foto]' alt=''>";
                    $naujiena = mysqli_fetch_assoc($visosNaujienosOBJ);
                    // "</div>"
                    }
                ?> 
            </div>

        </aside>

    </div>
</section>

<footer class="container spalva">
    <div class="row paddingas">© 2020</div>
</footer>



        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
