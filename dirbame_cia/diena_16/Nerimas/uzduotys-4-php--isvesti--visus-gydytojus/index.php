
<?php
include_once('models/doctors.php');
$visiGydytojaiOBJ = getDoctors();
$gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ); // is Mysqli OBJ. paima eilute ir pavercia i array/masyva
$gydytojas2 = mysqli_fetch_assoc($visiGydytojaiOBJ); // is Mysqli OBJ. paima eilute ir pavercia i array/masyva
$gydytojas3 = mysqli_fetch_assoc($visiGydytojaiOBJ); // is Mysqli OBJ. paima eilute ir pavercia i array/masyva
// test
// print_r($gydytojas);
// echo "<hr>";
// print_r($gydytojas2);
// ------------
while($gydytojas) {
    echo "<h5>". $gydytojas['name']. $gydytojas['lname'] ."</h5>";
    $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
}


 ?>
