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

    </div>
</div>
</div>
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>








    </body>
