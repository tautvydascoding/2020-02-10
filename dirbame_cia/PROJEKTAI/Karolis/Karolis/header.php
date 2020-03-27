<?php
session_start();
$black = "";
    $white = "";
    $hour = time() + 3600;
    if (isset($_POST['order']))
    {
        $color = $_POST['order'];
        $$color = " selected";
        setcookie("Free_cookies", $color, $hour);
      }
      else if(isset($_COOKIE['Free_cookies']))
    {
        $color = $_COOKIE['Free_cookies'];
        $$color = " selected";
    } else
    {
        $color = "black";
        $black = " selected";
    }
 ?>
<!DOCTYPE html>

<form method='post' <?php echo "STYLE='background-color:".$color.";'";?> ><p id='txtorder'>
   <select name='order' id='order'>
     <option value="black" <?php echo $black; ?> >black</option>
 <option value="white" <?php echo $white; ?> >white</option>
 </select>
  <input type='submit' value='🌛'/>

  <head>
    <meta charset="utf-8">
    <meta name="description" content="Pavizdys meta aprasymo, daznai pasirodys search rezultatuose">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
  </head>



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
  </form>
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



    </div>
  </nav>
</header>



<script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
</html>
