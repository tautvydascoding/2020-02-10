<?php

session_start();




print_r($_POST);
if ($_POST["slaptazodis1"]==$_POST["slaptazodis2"]){
    $_SESSION['zinute']= "slaptazodziai sutampa";
} else {
    $_SESSION['zinute']= "slaptazodziai nesutampa";
}
// redirect - perkelimas i kita puslapi
header('Location: index.php');
exit();
 ?>
