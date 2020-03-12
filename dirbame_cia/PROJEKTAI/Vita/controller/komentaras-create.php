
<?php
// session_start();
include('../models/loginas.php');

include('../models/funkc-komentarai.php');

// print_r($_GET);
print_r($_POST);

$vardas = $_POST['author'];
$koment = $_POST['message'];


createKomentaras ($vardas, $koment);


//redirect - perkelimas
header("Location: ../Gaminiai.php");
exit();

$_SESSION['zinute'] =  "Pavyko prideti komentara";



?>
