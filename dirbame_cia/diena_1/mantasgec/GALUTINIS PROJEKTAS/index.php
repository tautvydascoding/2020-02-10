<?php include("header.php");
session_start();
?>

    <body>
<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-sm-2">
            <h5>Login here</h5>
            <form  action="controller/validation.php" method="post">
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

 <?php echo $_SESSION['username'] ;?>
 <ul>
<li><a href="contacts.php">kontaktai</a></li>
<li><a href="controller/Logout.php">Logout</a></li>
<li><a href="photos/img.php">Fotoalbumas</a></li>
</ul>


</div>
</div>
<!-------------------------------------------------- -->
<?php
include("models/prekes.php");

$visosZvakes = getZvakes();

$zvakes = mysqli_fetch_assoc( $visosZvakes  );
while ($zvakes) {
    include('preke.php');
    $zvakes =mysqli_fetch_assoc($visosZvakes);
}

 ?>
<!----------------------------------------- -->







    </body>
<?php include('footer.php'); ?>
