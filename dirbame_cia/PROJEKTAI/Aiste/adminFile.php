<?php
include ("header.php");
session_start();
?>


<h1>projektas</h1>
    

    <header class="container tarpas-apacia">
        <nav class="row">
            <div class="col-2 spalva paddingas tarpas-desine">Home</div>
            <div class="col-2 spalva paddingas tarpas-desine">About</div>
            <div class="col-2 spalva paddingas tarpas-desine">Contact</div>
            <div class="col spalva paddingas">
                <form action="registracija-form.php">
                    <input type="submit" value="Sign in" method="get">
                    <input type="submit" value="+new" method="get">
                </form>
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
                <div class="row paddingas">
                    <a href="">Naujienos</a>
                </div>
            </main>

            <aside class="col spalva">
                <div class="row paddingas">
                <?php
                include ('models/naujienos.php');



                        $visosNaujienosOBJ =  getNaujienosVisi();
                        $naujienos = mysqli_fetch_assoc($visosNaujienosOBJ);
                        while($naujienos) {
                        echo $naujienos['id'] . " " . $naujienos['titel'] . " " . $naujienos['text'] . " "  .  "<hr>";
                        echo "<img width='100%' src='img/$naujienos[foto]' alt=''>";
                        $naujienos = mysqli_fetch_assoc($visosNaujienosOBJ);
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
