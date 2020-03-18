<?php require "header.php";

?>

<body>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
if(isset($_SESSION['userId'])){
echo '<p class="login-status">you are logged in!</p>';
}else{
    '<p class="login-status">you are logged out!</p>';
}
             ?>
        </section>

    </div>
</main>



</body>
    <?php require "footer.php"; ?>
