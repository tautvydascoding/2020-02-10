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
                <li><a href="#">kontaktai</a></li>
            </ul>
            <div class="">
                <form class="" action="includes/login.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/e-mail">
                    <input type="password" name="pwd" placeholder="password">
                    <button class=""type="submit" name="Login">Login</button>
             </form>
             <a href="signup.php">Signup</a>
             <form class="" action="includes/logout.php" method="post">
                 <button type="submit" name="logout-submit">Logout</button>
          </form>

            </div>

        </nav>
    </header>
</body>
