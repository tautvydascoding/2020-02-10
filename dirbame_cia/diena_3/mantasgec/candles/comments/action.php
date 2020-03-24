<?php
include_once("../models/prekes.php");


$msg = "hello";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $date = date("y-m-d");

    $sql = "INSERT INTO comment_table(name, comment, cur_date)VALUES('$name', '$comment', '$date')";
    if($prisijungimas->query($sql)){
        $msg="posted successfully!";
    }else{
        $msg = "Failed post!";
    }
}

if(isset($_GET['del'])){
    $id =$_GET['del'];
    $sql = "DELETE FROM comment_table WHERE id='id'";
    if ($prisijungimas->query($sql)){
        header('location:coments.php');
    }
}

 ?>
