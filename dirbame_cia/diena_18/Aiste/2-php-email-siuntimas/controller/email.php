<?php



include ('../models/forma.php');

$vard = $_POST['vardas'];
$email = $_POST['email'];
$kl = $_POST['klausimas'];

print_r($_POST);

// email siuntimas tiesiai i musu pasta
// mail("a@a.lt", "klausimas", "klausimas......");

echo "Vardas: " . $vard . " ". "Email: " .  $email . " " . "klausimas" . " " . $kl;


?>
