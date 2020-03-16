<?php
session_start();

include("../models/prekes.php");
mysqli_select_db($prisijungimas,'userregister');
$name=$_POST['user'];
$pass=$_POST['password'];
$s="SELECT*FROM userregister WHERE name ='$name'";
$result=mysqli_query($prisijungimas,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo "username already taken";
}else{
    $reg="insert into userregister(name, password) values('$name','$pass')";
    mysqli_query($prisijungimas,$reg);
    echo "registration complete";

}

 ?>
