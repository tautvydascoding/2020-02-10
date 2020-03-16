<?php

session_start();
$mysqli= new mysqli("localhost", "root", "", "puslapis1") or die(mysqli_error($mysqli));

$id = 0;
$atnaujinti = false;
$username = "";
$password = "";

if (isset($_POST['save'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mysqli->query("INSERT INTO registracija (username, password) VALUES ('$username','$password')") or die($mysqli->error);

$_SESSION['message'] = "Irasas buvo issaugotas";
$_SESSION['msg_type'] = "Pavyko";
header("Location: vartotojai.php");
}


if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM registracija WHERE id = '$id' ") or die ($mysqli->error);

$_SESSION['message'] = "Irasas buvo istrintas";
$_SESSION['msg_type'] = "Pavyko";
header("Location: vartotojai.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $atnaujinti = true;
    $result = $mysqli->query("SELECT * FROM registracija WHERE id = '$id' ") or die ($mysqli->error);
    if($result->num_rows){
        $row = $result->fetch_array();
        $username = $row['username'];
        $password = $row['password'];
    }
}

if (isset($_POST['atnaujinti'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $mysqli->query("UPDATE registracija SET username='$username', password='$password' WHERE id = '$id' ") or die($mysqli->error);

    $_SESSION['message'] = "Irasas atnaujintas";
    $_SESSION['msg_type'] = "warning";
    header("Location: vartotojai.php");
}
 ?>
