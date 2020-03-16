<?php include("header.php");
session_start();

if(!isset($_SESSION['message']))


      ?>


    <body>
<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-sm-2">
            <form  action="controller/validation.php" method="post">
            <h5>Login here</h5>
                <div class="form-group">
                    <input type="text" name="user" class="form-control" placeholder="username" required>
               </div>
               <div class="form-group">
                   <input type="password" name="password" class="form-control" placeholder="password" required>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
</div>

<div class="col-sm-2">
    <h5>Register Here</h5>
    <form  action="controller/registration.php" method="post">
        <div class="form-group">
            <input type="text" name="user" class="form-control" placeholder="username" required>
       </div>
       <div class="form-group">
           <input type="password" name="password" class="form-control" placeholder="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

 <ul>
<li><a href="contacts.php">kontaktai</a></li>
<li><a href="upload_images\img.php">Fotoalbumas</a></li>
<li><a href="comments/comments.php">komentarai</a></li>
<li><a href="controller/Logout.php">Logout</a></li>
</ul>
<h1>Welcome <?php echo $_SESSION['message']; ?></h1>


</div>
</div>
<!-------------------------------------------------- -->

    <?php
    include("models/prekes.php");
?>  <main class="row h-auto ">
    <?php
$visosZvakes = getZvakes();
$zvakes = mysqli_fetch_assoc( $visosZvakes  );
while($zvakes) {
    echo "<article class='col-md-3 gallery'>";
    echo "<h4>". $zvakes['preke']."</h4>";
    echo "<img src='{$zvakes['foto']}' width='100px' height='100px'>";
    echo "<p>". $zvakes['aprasymas']."</p>";
    echo "<h4>". $zvakes['kaina']." Eur"."</h4>";
    echo "</article>";
    $zvakes = mysqli_fetch_assoc($visosZvakes);
}

?>

<!----------------------------------------- -->




    </body>
<?php include('footer.php'); ?>
