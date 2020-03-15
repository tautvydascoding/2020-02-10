<?php include('server.php');
    // include ('../header.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>PRISIJUNGIMAS</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" name="username" placeholder="Vartotojo vardas" >
  	</div>
  	<div class="input-group">
  		<input type="password" name="password" placeholder="Slaptažodis">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Prisijungti</button>
  	</div>
  	<p>
  		Naujas vartotojas?
        <br>
        <br>
        <a href="index.php" style="color: green;">UŽSIREGISTRUOKITE</a>
        <br>
        <br>
        <p> <a href="../index.php" style="color: green;">GRĮŽKITE Į PRADŽIĄ</a> </p>
  	</p>
  </form>
</body>
</html>
