
<?php

session_start();

include('../models/loginas.php');
include('../models/funkc-kontaktai.php');

$trinamasAdresas = $_GET['id'];
deleteAdresas ($trinamasAdresas);

// deleteGaminys(9);

$_SESSION['zinute'] =  "Pavyko istrinti adresa";

print_r($_SESSION);


header("Location: ../adminFiles.php");
exit();

// echo "pavyko istrinti adresa";
