
<?php
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


//redirect - perkelimas
header("Location: ../Pradzia.php");
exit();

// echo "Pavyko sukurti";


?>