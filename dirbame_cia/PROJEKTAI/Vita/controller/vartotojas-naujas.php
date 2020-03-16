<?php

session_start();

include('../models/loginas.php');
include('../models/funkc-vartotojo.php');

print_r($_POST);

// pavyko prisijungti prie DB Array ( [email] => mano.litas@litas.ktu [passw1] => loko [button] => )

$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$elpastas = $_POST['emailas'];
$slaptaz1 = $_POST['passw1'];
$slaptaz2 = $_POST['passw2'];

// =====

$password = $_POST['passw1'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
// =====

createVartotojas ($vardas, $pavarde, $elpastas, $hashed_password);

// =====
$_SESSION['zinute'] =  "Pavyko sukurti vartotoja";

header("Location: ../Pradzia.php");
exit();


// =====

// funkcija iskvieciama,

// $visiElpastoOBJ =  getElpastai ();
// $elpasto = mysqli_fetch_assoc($visiElpastoOBJ);
//------------------ok, atspausdina visus

// while($elpasto) {
//     echo "<h3>". $elpasto['elpastas']."</h3>";
//     $elpasto = mysqli_fetch_assoc($visiElpastoOBJ);
// }

// -----------
// tikrinam, ar DB turimi emailai (elpasto) sutampa suregistruojamu (elpastas)
// ????? kazkodel neveikia....

// while($elpasto) {
//
//     if ($elpasto == $elpastas){
//         echo "Toks pastas jau naudojamas. Pamirsote registraciją?"; // echo
//         // $_SESSION ['zinute'] = "Toks pastas jau naudojamas. Pamirsote registraciją?"; // sesijos zinutes
//     }
//     $elpasto = mysqli_fetch_assoc($visiElpastoOBJ);
//     // else {
//         // echo "Sveikiname prisiregistravus prie svetainės";
//     //     // $_SESSION ['zinute'] = "Sveikiname prisiregistravus";
//     // }
// }


// =====

// if ($_POST['passw1'] == $_POST['passw2']){
//     echo "Sveikiname prisiregistravus"; // echo
//     // $_SESSION ['zinute'] = "Sveikinam prisiregistravus"; // sesijos zinutes
// } else {
//     echo "Slaptazodziai nesutampa. Negalime sukurti, bandykite dar karta. ";
//     // $_SESSION ['zinute'] = "Suklydote. Slaptazodziai nesutampa ";
// }

// ==============
// if(password_verify($password, $hashed_password)) {
// echo "Sveikname prisijungus";
// } else {
//     echo "Slaptazodziai nesutampa";
// }

// ====
// if(password_verify($password, $hashed_password)) {
//     // If the password inputs matched the hashed password in the database
//     // Do something, you know... log them in.
// }
//
// // Else, Redirect them back to the login page.
// // ==========

// if ($slaptaz1 == $slaptaz2){
// if ($_POST['passw1'] == $_POST['passw2']){
//     echo "Sveikiname prisiregistravus"; // echo
//     // $_SESSION ['zinute'] = "Sveikinam prisiregistravus"; // sesijos zinutes
// } else {
//     echo "Suklydote. Slaptazodziai nesutampa ";
//     // $_SESSION ['zinute'] = "Suklydote. Slaptazodziai nesutampa ";
// }
// =================

// $sql=mysql_query("SELECT FROM users (username, password, email) WHERE username=$fusername");
//  if(mysql_num_rows($sql)>=1)
//    {
//     echo"name already exists";
//    }
//  else
//     {
//    //insert query goes here
//     }

// =================


 //redirect - perkelimas
 // header("Location: ../Pradzia.php");
 // exit();


 ?>
