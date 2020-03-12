<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>REGISTRACIJA</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <input type="text" name="username" placeholder="Vartotojo vardas"value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <input type="email" name="email" placeholder="El.paštas" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <input type="password" name="password_1" placeholder="Slaptažodis">
  	</div>
  	<div class="input-group">
  	  <input type="password" name="password_2" placeholder="Pakartokite slaptažodį">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registruotis</button>
  	</div>
  	<p>
  		Registruotas vartotojas?
        <br>
        <br>
         <a href="login.php" style="color: green;">PRISIJUNKITE</a>
         <br>
         <br>
        <p> <a href="../index.php" style="color: green;">GRĮŽKITE Į PRADŽIĄ</a> </p>
  	</p>
  </form>
</body>
</html>
