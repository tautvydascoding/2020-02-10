<?php
include('Header.php');
 ?>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->

<?php
include('Navigacija.php');
 ?>


                <main class="col h-auto bg-light">
                    <h1>Adminas</h1>

                    <?php
                    include('models/funkc-gaminiai.php');

echo "<hr />";
                    echo "<a href='controller/gaminys-create-form.php'>Kurti gamini</a>";

                    $visiGaminiaiOBJ =  getGaminiai();

                    $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
                    while($gaminys) {
                        echo "<div class='row'>";
                        echo "<h3 class='col-md-6'>". $gaminys['preke']."</h3>";
                        echo "<a class='col-md-3' href='controller/gaminys-delete.php?id={$gaminys['id']}'>Delete</a>";
                        echo "<a class='col' href='controller/gaminys-update-form.php?id={$gaminys['id']}'>Update</a>";
                        $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
                        echo "</div>";
                    }
echo "<hr />";
//

                     ?>

                </main>
                <!-- ================     -->
        </section>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->


        <?php
        include('Footer.php');
        ?>
