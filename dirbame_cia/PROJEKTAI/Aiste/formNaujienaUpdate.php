<?php
include ("header.php");
include ('models/prisijungimas.php');
include ('models/naujienos.php');
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
                <a href="">Čempionato lentelė</a>
            </div>

        </main>

        <aside class="col spalva">
          <div class="row paddingas">

            <?php

            $id = $_GET['id'];
            $naujiena = getNaujiena( $id );

            ?> 
              <form action="controller/naujienaUpdate.php" method="get">

                <textarea name="titel" id="" cols="100" rows="3" placeholder="titel" >
                <?php echo $naujiena['titel'] ?> </textarea> <hr>

                <textarea name="text" id="" cols="100" rows="10" placeholder="text" >
                <?php echo $naujiena['text'] ?> </textarea> <hr>

                <textarea name="foto" id="" cols="100" rows="1" placeholder="foto" >
                <?php echo $naujiena['foto'] ?> </textarea> <hr>

                <input type="hidden" value=" <?php echo $naujiena['id'] ?>" name="id">
                <button type="submit"> Saugoti </button>
              </form>

            </div>
          <div class="row paddingas"></div>
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




    






   



