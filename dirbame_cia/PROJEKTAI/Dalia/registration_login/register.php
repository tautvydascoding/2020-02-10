<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h4>REGISTRUOTIS</h4>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>
	<div class="input-group">
		<input type="text" name="username" placeholder="Vartotojo vardas"value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<input type="email" name="email" placeholder="El. paštas"value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<input type="password" placeholder="Slaptažodis"name="password_1">
	</div>
	<div class="input-group">
		<input type="password" placeholder="Pakartoti slaptažodį"name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Registruotis</button>
	</div>
	<p>
		Jau užsiregistravote? <a href="login.php">Prisijungti</a>
	</p>
	<p>
		<a href="../index.php">Į pradžią</a>
	</p>
</form>
</body>
</html>
