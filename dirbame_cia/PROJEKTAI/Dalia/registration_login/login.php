<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h4>PRISIJUNGTI</h4>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<input type="text" name="username" placeholder="Vartotojo vardas">
		</div>
		<div class="input-group">
			<input type="password" name="password" placeholder="Slaptažodis">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Prisijungti</button>
		</div>
		<p>
			Naujas narys? <a href="register.php">Registruotis</a>
		</p>
		<p>
			<a href="../index.php">Į pradžią</a>
		</p>
	</form>
</body>
</html>
