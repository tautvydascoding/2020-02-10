<?php

include_once('../models/doctors.php');
// print_r($_GET); // test
$vard = $_GET['vardas'];
$pard = $_GET['pavarde'];
$zona = $_GET['zona'];
createDoctor($vard, $pard, $zona);
// PHP redirect - perkialem vartotoja i kita puslapi

header("Location:  ../index.php");
exit();
 ?>

<!-- ------JS redirect---- -->
 <script type="text/javascript">
    window.location = '../index.php';
 </script>
