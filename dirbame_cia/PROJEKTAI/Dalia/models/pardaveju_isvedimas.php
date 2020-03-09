<?php
include "pardavejai.php";

$visiPardavejaiOBJ =  getSellers();
// is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
$pardavejas = mysqli_fetch_assoc($visiPardavejaiOBJ);
// mysqli_fetch_assoc - mysql antra pagrindine komanda, kuri ima po viena eilute lenteleje ir kas kaskar komanda paleidus paima kita. 
// test
print_r($pardavejas);

//------------------
while($pardavejas) {
    echo "<h2>". $pardavejas['name'] . " | " . $pardavejas['lname'] . " | " . $pardavejas['prekes'] . "</h2>";
    $pardavejas = mysqli_fetch_assoc($visiPardavejaiOBJ);
}
?>
