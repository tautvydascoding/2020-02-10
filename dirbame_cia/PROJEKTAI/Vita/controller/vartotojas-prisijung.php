<?php
// session_start();
include('../models/funkc-vartotojo.php');

print_r($_POST);

// ( [vardas] => Saule [pavarde] => Saulute [email] => kitas@kitas.kt [passw1] => asdf [passw2] => asdf [button] => )
// $vardas = $_POST['vardas'];
// $pavarde = $_POST['pavarde'];
$koks = $_POST['email'];
$pass = $_POST['passw1'];
// $slaptaz2 = $_POST['passw2'];


// =====
// pavyko prisijungti prie DB Array ( [email] => mano.litas@litas.ktu [passw1] => karti [button] => )
// =====
// select elpastas From vartotojai;

echo "<br />";
getVartotojoEmail ($koks);

// echo "<br />";
// getVartotojoSlaptaz ( $pass );

echo "<br />";
print_r($koks);
echo "<br />";
print_r($pass);

// echo "$vartotojai['vardas']";

// print_r($vartotojai['vardas']);  //????
// print_r($resultARRAY['0']);

// $trinamasGaminys = $_GET['id'];
// deleteGaminys ($trinamasGaminys);


// $password = $_POST['passw1'];
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// ==============
// if(password_verify($password, $hashed_password)) {
// echo "Sveikiname prisijungus";
// } else {
//     echo "Slaptazodziai nesutampa";
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

 // echo "Pavyko sukurti";


 ?>
