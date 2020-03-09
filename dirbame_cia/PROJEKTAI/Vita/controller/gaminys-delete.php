
<?php

include('../models/funkc-gaminiai.php');

$trinamasGaminys = $_GET['id'];
deleteGaminys ($trinamasGaminys);

// deleteGaminys(9);

header("Location: ../Pradzia.php");
exit();

echo "pavyko istrinti gamini";
