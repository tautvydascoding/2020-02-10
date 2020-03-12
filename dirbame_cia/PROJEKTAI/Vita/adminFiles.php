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
session_start();

// $_SESSION['zinute'] = "";
echo "<hr />";
?>
<div id="pranesimas">...</div>
<?php
include('models/funkc-gaminiai.php');
// include('models/loginas.php');

echo "<hr />";
                    echo "<a href='gaminys-create-form.php'>Kurti gamini</a>";

                    $visiGaminiaiOBJ =  getGaminiai();

                    $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
                    while($gaminys) {
                        echo "<div class='row'>";
                        echo "<h3 class='col-md-4'>". $gaminys['preke']."</h3>";
                        echo "<a class='col-md-2' href='controller/gaminys-delete.php?id={$gaminys['id']}'>Delete</a>";
                        echo "<a class='col-md-2' href='gaminys-update-form.php?id={$gaminys['id']}'>Update</a>";
                        echo "<a class='col-md-2' id='btn-trinimas' href='controller/gaminys-delete-ajax.php?id={$gaminys['id']}'>Ajax trinimas</a>";
                        echo "<a class='col' id='btn-isvedimas' href='controller/gaminys-update-form.php?id={$gaminys['id']}'>Ajax update</a>";
                        $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
                        echo "</div>";
                    }
echo "<hr />";
//==========================

// include('models/funkc-kontaktai.php');
//
// echo "<a href='controller/adresas-create-form.php'>Kurti adresa</a>";
//
// $visiAdresaiOBJ =  getAdresai();
//
//
// $adresas = mysqli_fetch_assoc($visiAdresaiOBJ);
// while($adresas) {
//     echo "<div class='row'>";
//     echo "<h3 class='col-md-6'>". $adresas['adresas'].", ".$adresas['miestas']."</h3>";
//     echo "<a class='col-md-3' href='controller/adresas-delete.php?id={$adresas['id']}'>Delete</a>";
//     echo "<a class='col' href='controller/adresas-update-form.php?id={$adresas['id']}'>Update</a>";
//     $adresas = mysqli_fetch_assoc($visiAdresaiOBJ);
//     echo "</div>";
// }
// echo "<hr />";

// ================================
                     ?>

                </main>
                <!-- ================     -->
        </section>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->


        <?php
        include('Footer.php');
        ?>
