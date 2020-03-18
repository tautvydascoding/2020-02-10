
<?php  session_start();?>
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
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>
    <body>


    <header>
        <nav a href="wrapper" >
            <a href=""></a>
            <ul class="nav-area">
                <li><a href="index.php">Pradžia</a></li>
                <li><a href="img/img.php">fotoalbumas</a></li>
                <li><a href="comments">komentarai</a></li>
                <li><a href="contacts/contacts.php">kontaktai</a></li>
            </ul>
            <div class="header-login">
                <?php
                if (isset($_SESSION['userId'])) {
                echo'             <form class="" action="includes/logout.inc.php" method="post">
                                 <button class="btn btn-warning" type="submit" name="logout-submit">Logout</button>
                          </form> ';

             }
  else {
                echo '                <form class="" action="includes/login.inc.php" method="post">
                                    <input class="login-header" type="text" name="mailuid" placeholder="Username">
                                    <input class="login-header" type="password" name="pwd" placeholder="password">
                                    <button class="btn btn-warning"type="submit" name="login-submit">Login</button>
                                    <a href="signup.php" class="header-signup btn btn-warning">signup</a>
                             </form> ';

}

                 ?>



            </div>

        </nav>
    </header>
</body>
