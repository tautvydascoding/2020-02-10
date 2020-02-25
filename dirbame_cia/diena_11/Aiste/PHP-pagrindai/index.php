<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Antraste</h1>
<p>Nuo siol galima html failo net nekurti, o viska kurti i php faila, bet reikia php kalba ijungti ir isjungti. Visos taisykles HTML islieka</p>



<?php

// komentarai taip pat kaip JS

$x = 10;
$vardas = "Tomas";
$arVedes = true; // false, 1, 0
$vaikai = []; // modernus
$masinos = array (); // senovinis


// kintamuosius galima naudoti dvigubose kabutese, 
$tekstas = "Ilga istorija apie $vardas";

// bet viengubose neveiks
$tekstas = 'Ilga istorija apie $vardas';

// \ slasas ignoruoja sekanti simboli
$tekstas = " Ilga istorija apie \"Lietuva\"  ";

// teksto jungimas   . taskas vietoj  + pliuso
$tekstas2 = "Pradzia " . $tekstas . "<br>"; 



//  isvedimas i HTML faila (ekrana)
echo "labas <br>" ;
echo "x reiksme: $x <br>" ;

print ( "labas, x reiksme $x <br>" ) ; // f-ja

// for ($i=0; $i < ; $i++) { 
//     # code...
// }
?>

</body>
</html>
