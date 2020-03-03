<?php

include_once('models/prekes.php');
$pavadinimas=$_GET['pavadinimas'];
$kaina=$_GET['kaina'];
createZvake($pavadinimas, $kaina);

header("location: index.php");
exit();



 ?>
