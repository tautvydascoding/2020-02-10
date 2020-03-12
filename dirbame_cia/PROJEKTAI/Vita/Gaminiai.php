<?php
include('Header.php');
 ?>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->

<?php
include('Navigacija.php');
 ?>

                <!-- ++++++++++++++++++++++++++++++++++++- -->

                <main class="col h-auto bg-light">
                    <h1>Musu gaminiai</h1>

                    <?php
                    include('models/funkc-gaminiai.php');

                    // include('gaminys-template.php');

                    echo "<div class='row'>";

                    $visiGaminiaiOBJ =  getGaminiai();

                    $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
                    while($gaminys) {
                        echo "<article class='col-md-3 gallery'>";
                        echo "<h4>". $gaminys['preke']."</h4>";
                        echo "<img src='img/{$gaminys['foto']}' width='100px' height='100px'>";
                        echo "<p>". $gaminys['aprasas']."</p>";
                        echo "<h5>". $gaminys['dydis']."</h5>";
                        echo "<h4>". $gaminys['kaina']." Eur"."</h4>";
                        echo "</article>";
                        $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
                    }
                    echo "</div>";


                     ?>

                </main>
                <!-- ================     -->
        </section>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->


        <?php
        include('Footer.php');
        ?>
