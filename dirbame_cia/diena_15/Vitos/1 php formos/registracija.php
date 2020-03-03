<?php


// print_r( $_GET)
echo "Labas. Sveikinu prisijungus. $_GET[vardas] $_GET[pavarde] $_GET[tel] ";
echo "<hr />";
echo "Labas". $_GET['vardas']. "<br>"; // su tasku, lipdant, reikia kabuciu
echo "<hr />";
echo "Labas $_GET[vardas] <br>";  //  jei viename stringe, be kabuciu
echo "<hr />";
echo "Labas {$_GET['vardas']} <br>"; // arba riestiniuose skliaustuose
echo "<hr />";
echo "jusu duomenys: $_GET[vardas] $_GET[pavarde] tel: $_GET[tel]";

 ?>
