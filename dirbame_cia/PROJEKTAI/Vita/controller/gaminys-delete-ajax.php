
<?php

require_once('../models/funkc-gaminiai.php');

print_r($_GET);
print_r($_POST);


$num = $_GET['id'];
$gaminys = deleteGaminys ($num);

// deleteGaminys(9);

header("Location: ../adminFiles.php");
exit();

// echo "pavyko istrinti gamini";
