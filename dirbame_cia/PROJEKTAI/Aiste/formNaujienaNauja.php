<?php
include ("header.php");
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
                    <a href="">papildomai</a>
                </div>

            </main>

            <aside class="col spalva">
               <div class="row paddingas">

                  <form action="controller/naujienaNew.php" method="get">

                     <input type="text" name="titel" placeholder="titel"> <hr>

                     <textarea name="text" id="" cols="100" rows="10" placeholder="text" ></textarea> <hr>

                     <input type="text" name="foto" placeholder="foto"> <hr>

                     <button type="submit"> Kurti </button>
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




    






   



