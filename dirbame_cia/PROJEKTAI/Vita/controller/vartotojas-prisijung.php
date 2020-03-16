
<?php
include('../models/loginas.php');
include('../models/funkc-vartotojo.php');

session_start();
$em = "admin@admin.lt";
$pwd = "admin";


print_r($_POST);

$koks = $_POST['emailas'];
$pass = $_POST['passw1'];

// ==================

    if ($_POST['emailas'] == $em && $_POST['passw1'] == $pwd) {
        $_SESSION['em'] = $em;
        echo "<h2>Welcome".$_SESSION['em']."</h2>";
        echo "<script>location.href='../adminFiles.php'</script>";
    } else {
        echo "<script>alert('emailas or passw neteisingas!')</script>";
        echo "<script>location.href'vartotojas-prisijung-form.php'</script>";
    }

    // header("Location: ../Pradzia.php");
    // exit();

// ========================
// if (isset($_SESSION['em'])) {
//     echo "<h2>Welcome".$_SESSION['em']."</h2>";
//     echo "<a href='../adminFiles.php'>adminpsl</a>";
//     echo "<a href='logout.php'><input type='button' name='logout' value='logout'></a>";
// }
// else {
//     if ($_POST['emailas'] == $em && $_POST['passw1'] == $pwd) {
//         $_SESSION['em'] = $em;
//         echo "<script>location.href='adminFiles.php'</script>";
//     } else {
//         echo "<script>alert('emailas or passw neteisingas!')</script>";
//         echo "<script>location.href'vartotojas-prisijung-form.php'</script>";
//     }
// }

// =====
// select elpastas From vartotojai;

// echo "<br />";
// getVartotojoEmail ($koks);

// echo "<br />";
// getVartotojoSlaptaz ( $pass );

// echo "<br />";
// print_r($koks);
// echo "<br />";
// print_r($pass);

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
