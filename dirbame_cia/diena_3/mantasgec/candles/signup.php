<?php session_start(); ?>

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
        <form class="" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="username">
            <input type="text" name="mail" placeholder="email">
            <input type="password" name="pwd" placeholder="password">
            <input type="password" name="pwd-repeat" placeholder="repeat password">
            <button type="button" class="btn btn-warning">submit</button>

        </form>
        </section>

    </div>
</main>
