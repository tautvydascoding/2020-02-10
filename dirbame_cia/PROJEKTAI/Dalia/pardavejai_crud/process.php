<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'parduotuve') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$name = '';
$lname = '';
$location = '';

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO pardavejai (name, lname, location) VALUES('$name', '$lname','$location')") or
            die($mysqli->error);

    $_SESSION['message'] = "Įrašas išsaugotas!";
    $_SESSION['msg_type'] = "success";

    header("location: crud.php");

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM pardavejai WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Įrašas ištrintas!";
    $_SESSION['msg_type'] = "danger";

    header("location: crud.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM pardavejai WHERE id=$id") or die($mysqli->error());
    if($result->num_rows){
        $row = $result->fetch_array();
        $name = $row['name'];
        $lname = $row['lname'];
        $location = $row['location'];
    }
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $location = $_POST['location'];

    $mysqli->query("UPDATE pardavejai SET name='$name', lname='$lname', location='$location' WHERE id=$id") or
            die($mysqli->error);

    $_SESSION['message'] = "Įrašas atnaujintas!";
    $_SESSION['msg_type'] = "warning";

    header('location: crud.php');
}
