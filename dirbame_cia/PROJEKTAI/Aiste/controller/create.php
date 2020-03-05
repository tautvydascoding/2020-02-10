<?php

include ('../models/doctors.php');


$vard = $_GET['name'];
$parv = $_GET['lname'];
$zona = $_GET['area'];

createDoctor($vard, $parv, $zona);


// // redirect - perkialiam vartotoja i main puslapi
// header("Location: ../index.php");
// exit();

// // ta pati padaryti su DELETE


?>

<script>
    window.location = '../index.php';
</script>