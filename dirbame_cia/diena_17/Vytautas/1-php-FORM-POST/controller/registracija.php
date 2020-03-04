<?php
session_start(); // sesijos masyvo ijungimas


print_r($_POST); //test
if ($_POST['slaptazodis1'] == $_POST['slaptazodis2']) {
    $_SESSION['zinute'] = "pavyko prisijungti";
}else {
    $_SESSION['zinute'] = "nepavyko prisijungti";
}
//redirect - perkelimas i kita puslapi
header('location: ../index.php');
exit();
 ?>
