<?php

session_start();   // sesijos masyvo iungimas


include ('../models/registrcija.php');

print_r($_POST);

if ( $_POST["password1"] == $_POST["password2"] ) {
    $_SESSION['zinute'] = "slaptazodziai sutampa";
} else {
    $_SESSION['zinute'] = "slaptazodziai nesutampa !!!";
}

// redirect - perkelimas i kita puslapi

header('Location:  ../index.php');

exit();



// $user = $_POST['vardas'];
// $pass1 = $_POST['password1'];
// $pass2 = $_POST['password2'];

// createDoctor($user, $pass1, $pass2);



?>
