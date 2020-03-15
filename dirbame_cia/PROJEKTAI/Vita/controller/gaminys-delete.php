
<?php

session_start();

include('../models/loginas.php');
include('../models/funkc-gaminiai.php');

$trinamasGaminys = $_GET['id'];
deleteGaminys ($trinamasGaminys);

// deleteGaminys(9);

$_SESSION['zinute'] =  "Pavyko istrinti gamini";

print_r($_SESSION);

header("Location: ../Pradzia.php");
exit();

// echo "pavyko istrinti gamini";
