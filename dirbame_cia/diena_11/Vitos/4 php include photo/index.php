<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

<h1>Nuotraukos</h1>

<?php
$fotos=["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg"];

// include('fotos.php');
for ($i=0; $i < count($fotos) ; $i++) {
echo "<img src='img/$fotos[$i]' alt='logotipas' width='10%'>";

}
?>
    </body>
</html>
