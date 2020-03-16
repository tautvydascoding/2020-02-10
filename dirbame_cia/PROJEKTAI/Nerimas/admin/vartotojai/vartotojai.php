<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
    <title></title>
    <link rel="stylesheet" href="../../css/master.css">
</head>
<body style="background-color:#d166ac;">
    <b>
<?php
require_once 'procesas.php';  ?>
<?php
if (isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
     ?>
    </div>
<?php endif ?>
<div class="container">
 <?php
 $mysqli= new mysqli("localhost", "root", "", "puslapis1") or die(mysqli_error($mysqli));
 $result = $mysqli->query("SELECT * FROM registracija
 ") or die(mysqli_error($mysqli));
?>

<div class="row justify-content center">
    <table class="table">
        <thead>
            <tr>
                <th>Prisijungimo vardas</th>
                <th>Prisijungimo slaptazodis</th>
                <th colspan="2">Veiksmai:</th>
            </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><a href="vartotojai.php?edit=<?php echo $row['id'];  ?>"
                class="btn btn-warning">Pakeisti</a>
                <a href="vartotojai.php?delete=<?php echo $row['id'] ?>"
                class="btn btn-danger"><b>Istrinti</b></a>
            </td>
        </tr>
<?php endwhile; ?>
    </table>

</div>
<?php
 function pre_r($array) {
     echo '<pre>';
     print_r($array);
     echo '<pre>';
 }
  ?>
 <div class="row justify-content-center">
 <form action="" method="POST">
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <div class="form-group">
     <label><b>Vardas</b></label>
     <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Irasyti varda" >
     </div>
     <div class="form-group">
     <label><b>Slaptazodis</b></label>
     <input type="text" name="password" class="form-control" value="<?php echo $password ?>" placeholder="Irasyti slaptazodi" >
    </div>
    <div class="form-group">
        <?php if ($atnaujinti==true):
        ?>
        <button type="submit" class="btn btn-info" name="atnaujinti"> Atnaujinti </button>
    <?php else:  ?>
     <button type="submit" class="btn btn-success" name="save"> Prideti nauja</button>
 <?php endif; ?>
    </div>
    </form>
    </div>
    </div>




</b>
 <script type="text/javascript" src="../../libs/jQuery/jquery-3.3.1.min.js" ></script>
 <script type="text/javascript" src="../../libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
 <script type="text/javascript" src="../../master.js"></script>
</body>
</html>
