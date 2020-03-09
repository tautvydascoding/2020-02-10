
<?php
include('Header.php');
 ?>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->

<?php
include('Navigacija.php');
 ?>


                <!-- ++++++++++++++++++++++++++++++++++++- -->

                <main class="col h-auto bg-light">
                    <h1>Musu atstovybes</h1>
                    <?php
                    include('models/funkc-kontaktai.php');

                    echo "<div class='row'>";

                    $visiAdresaiOBJ =  getAdresai();

                    $adresas = mysqli_fetch_assoc($visiAdresaiOBJ);
                    while($adresas) {
                        echo "<article class='col gallery'>";
                        echo "<h5>". $adresas['adresas']."</h5>";
                        echo "<h5>". $adresas['miestas']."</h5>";
                        echo "<h5>". $adresas['kodas']."</h5>";
                        echo "<h5>". $adresas['telef']."</h5>";
                        echo "<h5>". $adresas['elpastas']."</h5>";
                        echo "</article>";
                        $adresas = mysqli_fetch_assoc($visiAdresaiOBJ);
                        echo "<br />";
                    }
                    echo "</div>";




                     ?>
     <!-- // +++++++++++++++++++++++++++++++++++++++++++ -->

<hr>
     <form class="" action="controller/email.php" method="post">
         <label for="vardas">Jusu vardas</label>
         <input type="text" name="vardas" value="">
         <br />
         <label for="email">Jusu emailas</label>
         <input type="email" name="email" value="" required>
         <br />
         <label for="">Jusu klausimas</label>
         <!-- <input type="text" name="Klausimas" value=""> -->
         <textarea name="klausimas" rows="8" cols="80" placeholder="taigi?"></textarea>
         <button type="submit" name="button">Siusti</button>
     </form>





                </main>
                <!-- ================     -->
        </section>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->

        <?php
        include('Footer.php');
        ?>
