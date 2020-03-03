<?php

session_start();

// print_r($_POST);


if ($_POST['passw1'] == $_POST['passw2']){
    // echo "Sveikiname prisiregistravus"; // echo
    $_SESSION ['zinute'] = "Sveikinam prisiregistravus"; // sesijos zinutes
} else {
    // echo "Suklydote. Slaptazodziai nesutampa ";
    $_SESSION ['zinute'] = "Suklydote. Slaptazodziai nesutampa ";
}

// redirect

header('Location: index.php');
exit();
 ?>
