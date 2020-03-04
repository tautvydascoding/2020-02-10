<?php
session_start(); //sesijos masyvo ijungimas
print_r($_POST);


if ($_POST ["slaptazodis1"]== $_POST ["slaptazodis2"]){
$_SESSION['zinute'] = "Slaptazodziai sutampa";
// echo "Slaptazodziai sutampa";

}
else {
    $_SESSION['zinute'] = "Slaptazodziai nesutampa";
    // echo "Slaptazodziai nesutampa";
}
// redirect - perkekinas i kita psl
header('Location:  ../index.php');
exit ();
?>
