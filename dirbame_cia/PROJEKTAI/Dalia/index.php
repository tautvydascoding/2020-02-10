<?php

include "header.php";
include "models/prekes.php";

$visosPrekesOBJ =  getItems();
// is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
$preke = mysqli_fetch_assoc($visosPrekesOBJ);
// mysqli_fetch_assoc - mysql antra pagrindine komanda, kuri ima po viena eilute lenteleje ir kas kaskar komanda paleidus paima kita.
// test
// print_r($preke);

//------------------
?>
<h1>TOPO CENTRAS</h1>
<section class="container">

    <div class="row aukstis-300">
        <article class="col-md-4 bg-danger">
            <h2>Pavadinimas</h2>
            <h3>Kategorija</h3>
            <p>Aprasymas</p>
            <button type="button" name="button">Kaina</button>
            </article>
        <article class="col-md-4 bg-warning">
            <h2>Pavadinimas</h2>
            <h3>Kategorija</h3>
            <p>Aprasymas</p>
            <button type="button" name="button">Kaina</button>
            </article>
        <article class="col-md-4 bg-info">
            <h2>Pavadinimas</h2>
            <h3>Kategorija</h3>
            <p>Aprasymas</p>
            <button type="button" name="button">Kaina</button>
            </article>

    </div>
<br>
<br>


    <div class="row aukstis-300">
        <article class="col-md-4 bg-danger">
            <h2>Pavadinimas</h2>
            <h3>Kategorija</h3>
            <p>Aprasymas</p>
            <button type="button" name="button">Kaina</button>
            </article>
        <article class="col-md-4 bg-warning">
            <h2>Pavadinimas</h2>
            <h3>Kategorija</h3>
            <p>Aprasymas</p>
            <button type="button" name="button">Kaina</button>
            </article>
        <article class="col-md-4 bg-info">
            <h2>Pavadinimas</h2>
            <h3>Kategorija</h3>
            <p>Aprasymas</p>
            <button type="button" name="button">Kaina</button>
            </article>

    </div>
<br>
<br>


    <div class="row aukstis-300">
        <article class="col-md-4 bg-danger">
            <h2>Pavadinimas</h2>
            <h3>Kategorija</h3>
            <p>Aprasymas</p>
            <button type="button" name="button">Kaina</button>
            </article>
        <article class="col-md-4 bg-warning">
            <h2>Pavadinimas</h2>
            <h3>Kategorija</h3>
            <p>Aprasymas</p>
            <button type="button" name="button">Kaina</button>
            </article>
        <article class="col-md-4 bg-info">
            <h2>Pavadinimas</h2>
            <h3>Kategorija</h3>
            <p>Aprasymas</p>
            <button type="button" name="button">Kaina</button>
            </article>

    </div>




</section>
<?php
    while($preke) {
        echo "<h2>". $preke['category'] . "  " . $preke['name'] . "  " . $preke['description'] . "  " . $preke ['price'] . "  " . $preke ['discount']. "  " .$preke ['seller_id'] . "</h2>";
        $preke = mysqli_fetch_assoc($visosPrekesOBJ);
    }
?>
</header>
<?php include "footer.php"; ?>
