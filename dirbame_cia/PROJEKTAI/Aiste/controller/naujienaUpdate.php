<?php

include ('../models/naujienos.php');




$titel = $_GET['titel'];
$text = $_GET['text'];
$foto = $_GET['foto'];

editNaujiena($id, $titel, $text, $foto);

$_SESSION['zinute'] = "naujiena pavyko koreguoti";


// redirect - perkelimas i kita puslapi

header('Location:  ../adminFile.php');

exit();

?>
