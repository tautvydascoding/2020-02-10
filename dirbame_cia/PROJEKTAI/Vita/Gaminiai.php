<?php
include('Header.php');
 ?>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->

<?php
include('Navigacija.php');
 ?>

                <!-- ++++++++++++++++++++++++++++++++++++- -->
                <?php
                echo $_SESSION['zinute'] =  "";
                 ?>

                <main class="col h-auto bg-light">
                    <h1>Musu gaminiai</h1>

                    <?php
                    // include('models/loginas.php');

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
                        echo "<p>"."<a href='gaminys-placiau.php?nr={$gaminys['id']}' class='btn btn-info' role='button'>Plačiau</a> "."</p>";
                        // echo "<button type='button' class='placiau' >Placiau</button>";
                        echo "</article>";
                        // echo "<br />";
                        $gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
                    }
                    echo "</div>";?>

<!-- "<p><a href='gaminys-placiau.php?nr={gaminys['id']}' class='btn btn-dark' role='button'>Plačiau</a> </p>"  -->

<div id='comments'>
<?php
// include('models/loginas.php');
include('models/funkc-komentarai.php');

$visiKomentaraiOBJ =  getKomentarai();
$komentaras = mysqli_fetch_assoc($visiKomentaraiOBJ);

if (mysqli_num_rows($visiKomentaraiOBJ)>0) {
    while ($komentaras) {
        echo "<p>";
        echo $komentaras['author'];
        echo "<br />";
        echo $komentaras['message'];
        echo "</p>";
        $komentaras = mysqli_fetch_assoc($visiKomentaraiOBJ);
    }
} else {
    echo "nera komentaru";
}
 ?>
</div>
<!-- <button>Rodyti komentarus</button> -->

<form class="" action="controller/komentaras-create.php" method="post">
<input type="text" name="author" value="" placeholder="jusu varadas">
<br />
    <textarea name="message" rows="8" cols="80" placeholder="Jusu kom"></textarea>
<br />
<button type="submit" name="button">prideti kom</button>
</form>
<?php


                     ?>

                </main>
                <!-- ================     -->
        </section>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->


        <?php
        include('Footer.php');
        ?>
