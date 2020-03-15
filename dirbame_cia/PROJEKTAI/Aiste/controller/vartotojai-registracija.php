<?php
include_once ('../models/prisijungimas.php');
include_once ('../models/vartotojai.php');

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];

createVartotojas($email, $pass);

// $_SESSION['zinute'] = "registracija sekminga";


header('Location:  ../index.php');

exit();