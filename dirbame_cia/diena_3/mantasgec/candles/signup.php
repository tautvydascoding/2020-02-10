<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="css/master.css">
<?php

?>


<main>
    <div class="wrapper-main">
        <section class="section-default">
        <h1>Sign up</h1>
        <?php
if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
        echo '<p class="signuperror">Fill in all fields!</p>';
    }
    elseif ($_GET["error"] == "invaliduidmail"){
        echo '<p class="signuperror">Invalid username and e-mail!</p>';
    }
elseif ($_GET["error"] == "invaliduid"){
    echo '<p class="signuperror">Invalid username!</p>';
}
elseif ($_GET["error"] == "passwordcheck"){
    echo '<p class="signuperror">Your password doesnt match!</p>';
}
elseif ($_GET["error"] == "usertaken"){
    echo '<p class="signuperror">Username is already exist!</p>';
}
}
         ?>
        <form  action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="password">
            <input type="password" name="pwd-repeat" placeholder="repeat password">
            <button type="submit" name="signup-submit" class="btn btn-warning">submit</button>

        </form>
        </section>

    </div>
</main>
<?php require "footer.php"; ?>
