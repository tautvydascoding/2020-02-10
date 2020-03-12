<?php

include "header.php";
include "models/prekes.php";

$visosPrekesOBJ =  getItems();
$preke = mysqli_fetch_assoc($visosPrekesOBJ);

?>
<section class="container bg-light">

    <br>
    <h1 class='text-center text-success'>TOPO CENTRAS</h1>
    <br>


    <div class="row">

    <?php

        while($preke) {
            echo  "<article class='col-sm bg-success float-left m-2 p-5'>". "<h2 class='text-center'>" . "<br />" . $preke['category'] . "</h2>" .
            "<h3 class= 'text-center'>" . $preke['name'] . "</h3>" .
            "<p class=' text-center'>" . $preke['description'] . "</p>" .
                "<button class='btn btn-secondary btn-lg btn-block' >". $preke ['price'] . " Eur " . "</button>" .
            "</article>";
            $preke = mysqli_fetch_assoc($visosPrekesOBJ);
        }
    ?>
    </div>
    <button type="button" name="button"></button>
<div class="clearfix"></div>
</div>
</section>

</header>
<?php include "footer.php"; ?>
