<?php
include ("header.php");
include ('models/prisijungimas.php');


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
                                        "<p><a href='naujiena.php?nr={$naujiena['id']}' class='btn btn-dark' role='button'>Plačiau</a> </p>" . 
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
