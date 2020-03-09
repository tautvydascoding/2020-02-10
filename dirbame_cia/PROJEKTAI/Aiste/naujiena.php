<?php
include ("header.php");

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
            <div class="row paddingas">
                <a href="">papildomai2</a>
            </div>
        </main>

        <aside class="col spalva">

            <div class="row paddingas">
                <?php
                include ('models/naujienos.php');
            

                $id = $_GET['nr'];
                $visosFotoOBJ =  getFotos($id);
                $foto = mysqli_fetch_assoc($visosFotoOBJ);
                // print_r($foto);
                // Array ( [naujienos_id] => 4 [id] => 4 [name] => deividas-virbauskas.jpg )
                while($foto) {
                    echo  "<img width='30%' src='img/$foto[name]' alt=''>";
                    $foto = mysqli_fetch_assoc($visosFotoOBJ);
                    // print_r($id);
                }

                $naujiena = getNaujiena( $id );
                echo "<h4>" . $naujiena['titel'] . "</h4>";
                echo "<p>".  $naujiena['text'] . "</p>";
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
