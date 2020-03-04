<?php

print_r($_POST);
// if ($_POST)['slaptazodis'] == $_POST['slaptazodis2']
$slaptazodis = $_POST['slaptazodis1'];
$slaptazodisPakartotas = $POST['slaptazodis2'];
if ($slaptazodis == $slaptazodisPakartotoas) {
    $_session['zinute'] = "slaptazodziai sutampa";
} else {
    $_SESSION['zinute'] = "slaptazodziai nesutampa!!!";
}

 ?>
