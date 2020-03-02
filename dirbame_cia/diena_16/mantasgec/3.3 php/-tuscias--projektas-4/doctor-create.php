<?php

include_once("models/doctors.php");
//print_r($_GET);
$vard =$_GET['vardas'];
$pard =$_GET['pavarde'];
$zona =$_GET['zona'];
createDoctor($vard, $pard, $zona);

header("location: /index.php");
exit();

 ?>
