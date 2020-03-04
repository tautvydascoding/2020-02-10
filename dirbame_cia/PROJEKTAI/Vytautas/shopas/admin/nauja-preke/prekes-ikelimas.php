<?php

include('../../controllers/sapnu_gaudykles.php');
$dydis = $_GET['dydis'];
$spalva = $_GET['spalva'];
$kaina = $_GET['kaina'];
$aprasymas = $_GET['aprasymas'];
createSG($dydis, $spalva, $kaina, $aprasymas);
//perkeliam vartotoja i kita puslapi
header("Location: ../admin.php");
exit();
 ?>
