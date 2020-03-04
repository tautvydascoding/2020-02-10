<?php
include ("header.php");
?>



<h1>projektas</h1>
    
<?php
include ('models/registracijas.php');
?>


    <header class="container tarpas-apacia">
        <nav class="row ">
            <div class="col-2 spalva paddingas tarpas-desine">Home</div>
            <div class="col-2 spalva paddingas tarpas-desine">About</div>
            <div class="col-2 spalva paddingas tarpas-desine">Contact</div>
            <div class="col spalva paddingas">
                <input type="button" value="sign in">
            </div>
        </nav>
    </header>

    <section class="container  tarpas-apacia">
        <div class="row hight-col">

            <main class="col-3 spalva tarpas-desine">
                <div class="row paddingas"> 
                    <a href="komandos.php">Komandos</a>
                </div>
                <div class="row paddingas">
                    <a href="tvarkarasciai.php">Tvarkarasciai</a>
                </div>
                <div class="row paddingas">
                    <a href="kontaktai.php">Kontaktai</a>
                </div>
            </main>

            <aside class="col spalva">
               <div class="row paddingas">
                  <form action="controller/create.php" method="get">
                     <label for="name">Jusu vardas</label>
                     <input type="text" name="name" placeholder="Vardas"> <hr>
                     <label for="lname">Jusu pavarde</label>
                     <input type="text" name="lname" placeholder="Pavarde"> <hr>
                     <label for="area">User Name</label>
                     <input type="text" name="area" placeholder="User Name"> <hr>

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




    






   



