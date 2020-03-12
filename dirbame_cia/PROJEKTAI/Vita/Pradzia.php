<?php
include('Header.php');
 ?>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->

<?php
include('Navigacija.php');
 ?>

                <!-- ++++++++++++++++++++++++++++++++++++- -->

                <main class="col aukstis-300 bg-light">
                    <h1>Pagrindinis</h1>
                    <br />
                    <?php
                    include('models/funkc-apie.php');

                    $visiTeigApiemusOBJ =  getApiemus();
                    $teiginys = mysqli_fetch_assoc($visiTeigApiemusOBJ);
                    while($teiginys) {
                        echo "<h3>". $teiginys['mintis']."</h3>";
                        $teiginys = mysqli_fetch_assoc($visiTeigApiemusOBJ);
                    }

                     ?>

                </main>
                <!-- ================     -->
        </section>

        <!-- =================================== -->

<?php
include('Footer.php');
?>
