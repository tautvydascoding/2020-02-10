<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    $meniu = ["Home", "About", "Gallery", "Contact", "Blog"] ;

print_r ( $meniu ); // test --- isveda array || obj || string

var_dump ( $meniu ); // test --- isveda array || obj || string  +++ Type

?>


<nav>
    <ul>
        <?php
            for ($i=0; $i < 4; $i++) { 
                echo "<li>" . $meniu[$i] .  "</li>";
                echo "<li>    $meniu[$i]    </li>";
                echo "<li>   {$meniu[$i]}   </li>";
            }
        ?>
    </ul>
</nav>

<?php
    $fotos = [ '1.jpg', '2.jpg', '3.jpg', '4.jpg'];

    for ($i=0; $i < count ($fotos); $i++) { 
        echo "<img src='img/$fotos[$i]' alt='logotipas' width = 25%>" ;
    }
?>


</body>
</html>
