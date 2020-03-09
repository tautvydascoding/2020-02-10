<?php
include ("header.php");

include ('models/tvarkarasciai.php');
?>

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




    





