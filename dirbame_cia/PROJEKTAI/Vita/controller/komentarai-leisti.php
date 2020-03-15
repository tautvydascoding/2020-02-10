<?php
// include('models/loginas.php');
include('models/funkc-komentarai.php');

$commentNewCount = $_POST['commentNewCount'];

$visiKomentaraiOBJ =  getKomentarai();
$komentaras = mysqli_fetch_assoc($visiKomentaraiOBJ);

if (mysqli_num_rows($visiKomentaraiOBJ)>0) {
    while ($komentaras) {
        echo "<p>";
        echo $komentaras['author'];
        echo "<br />";
        echo $komentaras['message'];
        echo "</p>";
        $komentaras = mysqli_fetch_assoc($visiKomentaraiOBJ);
    }
} else {
    echo "nera komentaru";
}




 ?>
