
<?php

include('../models/funkc-kontaktai.php');

$trinamasAdresas = $_GET['id'];
deleteAdresas ($trinamasAdresas);

// deleteGaminys(9);

// header("Location: ../Pradzia.php");
// exit();

echo "pavyko istrinti adresa";
