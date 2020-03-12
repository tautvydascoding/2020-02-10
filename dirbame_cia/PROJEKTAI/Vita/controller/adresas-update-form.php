<?php
include('../models/funkc-gaminiai.php');
// include('gaminys-create.php');
 ?>
<?php
print_r($_GET);
// print_r($_POST);

$id =$_GET['id'];
$gaminys = getGaminys( $id );
print_r($gaminys);

 ?>

<form class="" action="gaminys-update.php" method="post">
   <label for="preke">Prekes pavadinimas:</label>
   <input type="text" name="preke" value="<?php echo "{$gaminys['preke']}";  ?>" placeholder="Preke">
   <br>
   <label for="aprasymas">Prekes aprasymas:</label>
   <input type="text" name="aprasas" value="<?php echo "{$gaminys['aprasas']}";  ?>" placeholder="Aprasymas">
   <br>
   <label for="dydis">Prekes dydis:</label>
   <input type="text" name="dydis" value="<?php echo "{$gaminys['dydis']}";  ?>" placeholder="dydis">
   <br>
   <label for="">Prekes kaina:</label>
   <input type="text" name="kaina" value="<?php echo "{$gaminys['kaina']}";  ?>" placeholder="kaina">
   <br>
   <label for="">Meistras:</label>
   <input type="text" name="meistro" value="<?php echo "{$gaminys['meistro']}";  ?>" placeholder="meistro">
   <br>
   <label for="">Prekes foto:</label>
   <input type="text" name="foto" value="<?php echo "{$gaminys['foto']}";  ?>" placeholder="foto">
   <br>
   <input type="hidden" name="id" value="<?php echo "{$gaminys['id']}";  ?>">
   <button type="submit" name="button">Issaugoti preke</button>
</form>
