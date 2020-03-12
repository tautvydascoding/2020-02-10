<?php
include_once ('../models/prisijungimas.php');
include_once ('../models/vartotojai.php');

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];

prisijungimasVartotojas($email, $pass);