<?php

session_start();
session_destroy();

unset($_SESSION['zinute']);
$_SESSION['zinute'] = "jus atsijungete nuo paskyros";

header('location:../prisijungimas-vartorojai-form.php');

?>