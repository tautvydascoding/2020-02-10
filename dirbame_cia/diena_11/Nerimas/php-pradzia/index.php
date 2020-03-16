
<h1>Antraste</h1>


<?php


// komentarai
/* ilgas komentaras
*/

// $x = 10;
// $vardas = "Tomas";
// $arVedes = true; // false, 1, 0
// $vaikai = [];
// $masinos = array(); // senovinis

$tekstas = "Ilga istorija apie vardas";
$tekstas = "Ilga istorija apie vardas";
$tekstas = 'Ilga istorija apie vardas'; // NEVEIKIA SU TOKIOM KABUTEM

$tekstas = "Ilga istorija apie \$vardas"; // \ IGNORUOJA sekanti SIMBOLI
$tekstas = "Ilga istorija apie \"Lietuva\" ";

// teksto jungimas
$tekstas2 = "pradzia" . $tekstas . "<br"; // sujungimas '.' vietoj '+

$x = 90;
// isvedimas i HTML faila (ekrana)
echo "x reiksme: $x <br>";
echo "Labas";
print ( "Labas, x reiksme $x <br>");
