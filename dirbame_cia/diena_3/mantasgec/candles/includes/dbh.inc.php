<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "zvakes1";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName,3307);

if(!$conn){
    die("connection failed: ". mysqli_connect_error());
    }




 ?>
