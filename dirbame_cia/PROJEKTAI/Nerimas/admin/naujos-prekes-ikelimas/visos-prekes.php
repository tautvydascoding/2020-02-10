<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
    <title></title>
    <link rel="stylesheet" href="../../css/master.css">
</head>
<body style="background-color:#cc854b;">
<?php
require_once 'ikelimo-procesas.php';  ?>
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
 $result = $mysqli->query("SELECT * FROM prekes
 ") or die(mysqli_error($mysqli));
?>

<div class="row justify-content center">
    <table class="table">
        <thead>
            <tr>
                <th>Pavadinimas</th>
                <th>Kaina</th>
                <th>Nuolaida</th>
                <th>Pozicija</th>
                <th>Kiekis</th>
                <th colspan="5">Veiksmai:</th>
            </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['Pavadinimas']; ?></td>
            <td><?php echo $row['Kaina']; ?></td>
            <td><?php echo $row['Nuolaida']; ?></td>
            <td><?php echo $row['Pozicija']; ?></td>
            <td><?php echo $row['Kiekis']; ?></td>
            <td><a href="visos-prekes.php?edit=<?php echo $row['id'];  ?>"
                class="btn btn-info"><b>Koreguoti</b></a>
                <a href="ikelimo-procesas.php?delete=<?php echo $row['id'] ?>"
                class="btn btn-danger">Istrinti</a>
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
     <label><b>Pavadinimas</b</label>
     <input type="text" name="Pavadinimas" class="form-control" value="<?php echo $Pavadinimas; ?>" placeholder="Irasyti pavadinima" >
     </div>
      <div class="form-group">
     <label>Kaina</label>
     <input type="text" name="Kaina" class="form-control" value="<?php echo $Kaina; ?>" placeholder="Irasyti kaina" >
     </div>
      <div class="form-group">
     <label>Nuolaida</label>
     <input type="text" name="Nuolaida" class="form-control" value="<?php echo $Nuolaida; ?>" placeholder="Irasykite nuolaida" >
     </div>
     <label>Pozicija</label>
      <div class="form-group">
     <input type="text" name="Pozicija" class="form-control" value="<?php echo $Pozicija; ?>" placeholder="Irasykite pozicija" >
     </div>
     <div class="form-group">
     <label>Kiekis</label>
     <input type="text" name="Kiekis" class="form-control" value="<?php echo $Kiekis ?>" placeholder="Irasyti kieki" >
    </div>
    <div class="form-group">
        <?php if ($atnaujinti==true):
        ?>
        <button type="submit" class="btn btn-success" name="atnaujinti">Atnaujinti</button>
    <?php else:  ?>
     <button type="submit" class="btn btn-warning" name="save">Issaugoti</button>
 <?php endif; ?>
    </div>
    </form>
    </div>
    </div>
    </div>





 <script type="text/javascript" src="../../libs/jQuery/jquery-3.3.1.min.js" ></script>
 <script type="text/javascript" src="../../libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
 <script type="text/javascript" src="../../master.js"></script>
</body>
</html>
