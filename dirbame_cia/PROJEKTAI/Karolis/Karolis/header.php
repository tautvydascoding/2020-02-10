<?php
session_start();
 ?>


<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Pavizdys meta aprasymo, daznai pasirodys search rezultatuose">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body class>



<header>
  <nav class="nav-header-main">
    <a class="header-logo" href="index.php">
      <img src="img/monster.png" alt="logo">
    </a>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="../karolis/includes/onclick.monstrai.php">Monstrai</a></li>
      <li><a href="../karolis/includes/foto.php">Foto</a></li>
      <form action="../karolis/includes/uploads.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
        </form>

      <!-- <li><a href="../karolis/models/crud.php">Crud</a></li> -->
    </ul>
  </nav>
    <div class="header-login">
      <?php
        if (isset($_SESSION['userId'])) {
         echo  '<form action="includes/logout.inc.php" method="post">
             <button type="submit" name="logout-submit">Logout</button>
           </form>';
        }
        else {
          echo  '<form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Username/E-mail...">
      <input type="password" name="password" placeholder="Password...">
      <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
        }
       ?>
<button type="button" name="dark_light" onclick="myFunction()" title="dark-mode">🌛</button>

<script type="text/javascript">

function myFunction() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}

</script>

    </div>
  </nav>
</header>
</body>
<script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
</html>
