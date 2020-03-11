<?php
session_start();
include_once("../models/prekes.php");

 ?>

<!DOCTYPE html>
<html
    <head>

</head>
    <body>
        <form  action="" method="post">
            <th colspan="2">Admin login</th>
        <tr>
            <td>username:</td><td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td>password:</td><td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="login" value="login"></td>


        </tr>
        </form>
        <?php
if(isset($_POST['login'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $query = "SELECT*FROM admin WHERE uname='$username' AND upass='$password'";
    $run = mysqli_query($prisijungimas, $query);
    if(mysqli_num_rows($run)>0){
        $_SESSION['uname'] = $username;
        echo "<script>window.open('admin.php','_self')</script>";
    }else{
        echo "<script>alert('invalid user')</script>";
    }
}
         ?>

    </body>
</html>
