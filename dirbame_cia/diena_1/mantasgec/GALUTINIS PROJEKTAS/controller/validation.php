<?php
session_start();

include("../models/prekes.php");
mysqli_select_db($prisijungimas,'userregister');
$name=$_POST['user'];
$pass=$_POST['password'];

$s="SELECT*FROM userregister WHERE name ='$name' && password='$pass'";
$result=mysqli_query($prisijungimas,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['message']="You are logged in";
    $_SESSION['username']=$name;
    header('location:../index.php');
}else{
header('location:../index.php');
}

 ?>
