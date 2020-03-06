<?php

include('../../controllers/sapnu_gaudykles.php');
$nr = $_GET['id'];
$dydis = $_GET['dydis'];
$spalva = $_GET['spalva'];
$kaina = $_GET['kaina'];
$aprasymas = $_GET['aprasymas'];
createSG($nr, $dydis, $spalva, $kaina, $aprasymas);
//perkeliam vartotoja i kita puslapi
header("Location: ../admin.php");
exit();
 ?>
