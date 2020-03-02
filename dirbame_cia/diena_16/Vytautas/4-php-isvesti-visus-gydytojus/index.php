<?php
include('models/doctors.php');
$visiGydytojai = getDoctors();
$gydytojas = mysqli_fetch_assoc($visiGydytojai);

while ($gydytojas == true) {
    // print_r($gydytojas); // test
    echo "<a href='trintiGydytoja.php?aa=$gydytojas[id]'> trinti </a>";
    echo "<a href='template-doctor.php?aa=$gydytojas[id] '>   $gydytojas[name]   $gydytojas[Lname]</a><br>";
    $gydytojas = mysqli_fetch_assoc($visiGydytojai);
}
?>
