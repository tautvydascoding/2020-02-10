
<?php
session_start();

include('../models/loginas.php');
include('../models/funkc-gaminiai.php');

// print_r($_GET);
// print_r($_POST);

$preke = $_POST['preke'];
$aprasas = $_POST['aprasas'];
$dydis = $_POST['dydis'];
$kaina = $_POST['kaina'];
$meistro = $_POST['meistro'];
$foto = $_POST['foto'];

createGaminys ($preke, $aprasas, $dydis, $kaina, $meistro, $foto);

$_SESSION['zinute'] =  "Pavyko sukurti gamini";
// echo "<div class= 'bg-info'>".$_SESSION['zinute']."</div>";


//redirect - perkelimas
header("Location: ../adminFiles.php");
exit();




?>
