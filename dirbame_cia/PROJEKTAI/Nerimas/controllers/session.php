<?php
// session_start();
$conn = mysqli_connect("localhost", "root", "", "puslapis1");
if ($conn) {
    echo "pavyko prisijungti prie DB <br>";
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error($conn);
}
include('../controllers/login.php');
// Storing Session
// if($count==1){
//     session_start();
//     $_SESSION['loggedin'] = true;
//     $_SESSION['username'] = $username;
// }
$user_check = $_SESSION['login_user'];
$query = "SELECT username from registracija where username = '$user_check'";

$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
if (mysqli_num_rows($ses_sql) > 0) {
} else {
    echo "Nepavyko prisijungti. Patikrinkite prisijungimo duomenis.";
    return NULL;
}
$login_session = $row['username'];
?>
