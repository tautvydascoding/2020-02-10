<?php


include_once("../models/prekes.php");
$mysqli= new mysqli('localhost', 'root','root', 'zvakes',3307);
$update = false;
$pavadinimas = '';
$kaina = '';

if(isset($_POST['save'])){
    $pavadinimas = $_POST['pavadinimas'];
    $kaina = $_POST['kaina'];

$mysqli->query("INSERT INTO prekes ( pavadinimas, kaina)VALUES( '$pavadinimas','$kaina')")or die($mysqli->error);

$_SESSION['message'] ="Record has been saved!";
$_SESSION['msg_type'] ="success";
header("location:admin.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM prekes WHERE id=$id") or die($mysqli->error());
    $_SESSION['message'] ="Record has been deleted!";
    $_SESSION['msg_type'] ="danger";

    header("location:admin.php");
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT*FROM prekes WHERE id=$id") or die ($mysqli->error());
    if($result->num_rows){
        $row =$result->fetch_array();
        $pavadinimas = $row['pavadinimas'];
        $kaina = $row['kaina'];
    }
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $pavadinimas =$_POST['pavadinimas'];
    $kaina = $_POST['kaina'];
    $mysqli->query("UPDATE prekes SET pavadinimas='$pavadinimas', kaina='$kaina' WHERE id=$id") or die ($mysqli->error);
    $_SESSION['message'] = "record been updated!";
    $_SESSION['msg_type'] = "warning";
    header("location:admin.php");
}

 ?>
