
<?php
session_start();
include('../models/loginas.php');
include('../models/funkc-gaminiai.php');

print_r($_GET);
print_r($_POST);

$id = $_POST['id'];
$preke = $_POST['preke'];
$aprasas = $_POST['aprasas'];
$dydis = $_POST['dydis'];
$kaina = $_POST['kaina'];
$meistro = $_POST['meistro'];
$foto = $_POST['foto'];

updateGaminys ($id, $preke, $aprasas, $dydis, $kaina, $meistro, $foto);

$_SESSION['zinute'] =  "Pavyko pakoreguoti gamini";
// echo "pavyko pakoreguoti gamini";

//redirect - perkelimas
header("Location: ../Pradzia.php");
exit();

// echo "Pavyko sukurti";


?>
