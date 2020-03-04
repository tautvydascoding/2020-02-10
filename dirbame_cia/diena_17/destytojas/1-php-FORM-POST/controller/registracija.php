<?php
session_start(); // sesijos masyvo ijungimas
// session_unset();
// session_abort();

print_r($_POST); // test
$slaptazodis = $_POST['slaptazodis1'];
$slaptazodisPakartotas = $_POST['slaptazodis2'];
// if ($_POST['slaptazodis1'] == $_POST['slaptazodis2']) {
if ($slaptazodis == $slaptazodisPakartotas) {
    $_SESSION['zinute'] = "slaptazodziai sutampa";
} else {
    $_SESSION['zinute'] =  "slaptazodziai nesutampa!!!";
}
// redirect - perkelimas i kita puslapi
header('Location:   ../index.php');
exit();
?>
