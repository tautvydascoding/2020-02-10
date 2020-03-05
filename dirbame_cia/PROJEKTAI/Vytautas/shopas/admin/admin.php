<?php
include('../controllers/sapnu_gaudykles.php');
$visosSG = getSGS();
$sapnuGaudykle = mysqli_fetch_assoc($visosSG);

while ($sapnuGaudykle == true) {
    // print_r($gydytojas); // test
    echo "<a href='trintiSG.php?aa=$sapnuGaudykle[id]'> trinti </a>";
    echo "<a href='template-SG.php?aa=$sapnuGaudykle[id] '>   $sapnuGaudykle[dydis]   $sapnuGaudykle[spalva]  $sapnuGaudykle[kaina]  $sapnuGaudykle[aprasymas]</a><br>";
    $sapnuGaudykle = mysqli_fetch_assoc($visosSG);
}
?>
<div class="">
    <?php include('nauja-preke/prideti-preke-mygtukas.php'); ?>

</div>
