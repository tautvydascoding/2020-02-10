
<?php
include('../models/funkc-gaminiai.php');

echo "<a href='controller/gaminys-create.php'>Kurti gamini</a>";

$visiGaminiaiOBJ =  getGaminiai();

$gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
while($gaminys) {

echo "<div class='row'>";
echo "<h4 class='col-md-6'>". $gaminys['preke']."</h4>";
echo "<a class='col-md-3' href='controller/gaminys-delete.php?id={$gaminys['id']}'>Delete</a>";
echo "<a class='col' href='controller/gaminys-update.php?id={$gaminys['id']}'>Update</a>";
$gaminys = mysqli_fetch_assoc($visiGaminiaiOBJ);
echo "</div>";
}

 ?>
