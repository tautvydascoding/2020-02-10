
<div class="">

    <img src="../img/50.jpg" alt="" height="300px">
</div>
<?php
// for ($i=0; $i < 8; $i++) {
//     // code...
// }


require_once('sapnu_gaudykles.php');
$x = $_GET['nr'];
$SG = getSG($x); // array - gydytrojo duomenis is DB

// print_r($gydytojas); // test

echo "<h3>  $SG[dydis]   $SG[spalva]</h3>";


 ?>
