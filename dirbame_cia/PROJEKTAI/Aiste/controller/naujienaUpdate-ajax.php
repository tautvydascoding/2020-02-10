<?php
session_start();
include_once ('../models/prisijungimas.php');
include_once ('../models/naujienos.php');

$id = $_GET['id'];
$titel = $_GET['titel'];
$text = $_GET['text'];
$foto = $_GET['foto'];
editNaujiena($id, $titel, $text, $foto);


echo json_encode($naujiena);

$_SESSION['zinute'] = "naujiena istrinta";

header('Location:  ../adminFile.php');

exit();


// print_r($_GET);

editNaujiena($id, $titel, $text, $foto);


$_SESSION['zinute'] = "naujiena pavyko koreguoti";


// redirect - perkelimas i kita puslapi

header('Location:  ../adminFile.php');

exit();