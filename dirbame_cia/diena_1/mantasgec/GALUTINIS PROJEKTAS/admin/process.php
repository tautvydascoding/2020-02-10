<?php


include_once("../models/prekes.php");
$mysqli= new mysqli('localhost', 'root','root', 'zvakes',3307);
$update = false;
$preke = "";
$kaina = "";
$foto = "";
$aprasymas = '';

if(isset($_POST['save'])){
    $preke = $_POST['preke'];
    $foto = $_POST['foto'];
    $aprasymas = $_POST['aprasymas'];
    $kaina = $_POST['kaina'];

$mysqli->query("INSERT INTO prekes1 (preke,foto, aprasymas,kaina)VALUES('$preke','$foto','$aprasymas','$kaina')")or die($mysqli->error);

$_SESSION['message'] ="Record has been saved!";
$_SESSION['msg_type'] ="success";
header("location:admin.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM prekes1 WHERE id=$id") or die($mysqli->error());
    $_SESSION['message'] ="Record has been deleted!";
    $_SESSION['msg_type'] ="danger";

    header("location:admin.php");
}
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT*FROM prekes1 WHERE id=$id") or die ($mysqli->error());
    if($result->num_rows){
        $row =$result->fetch_array();
        $preke = $row['preke'];
        $kaina = $row['kaina'];
        $foto = $row['foto'];
        $aprasymas = $row['aprasymas'];
    }
}
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $preke =$_POST['preke'];
    $kaina = $_POST['kaina'];
    $foto = $_POST['foto'];
    $aprasymas = $_POST['aprasymas'];
    $mysqli->query("UPDATE prekes1 SET preke='$preke', kaina='$kaina', foto='$foto', aprasymas='$aprasymas' WHERE id=$id") or die ($mysqli->error);
    $_SESSION['message'] = "record been updated!";
    $_SESSION['msg_type'] = "warning";
    header("location:admin.php");
}


 ?>
