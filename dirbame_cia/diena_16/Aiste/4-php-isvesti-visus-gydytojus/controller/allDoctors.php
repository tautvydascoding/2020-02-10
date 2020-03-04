<?php

include ('../models/doctors.php');

$visiGydytojaiOBJ =  getDoctors();
$gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);

print_r($gydytojas);

while($gydytojas) {
    echo "<ul><li>" . "<a href='page-doctor.php?sk=$gydytojas[id]'>" . $gydytojas['id'] . " " . $gydytojas['name'] . " " . $gydytojas['lname'] . "</a>" .  "</ul></li>";
    $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
}



?>
