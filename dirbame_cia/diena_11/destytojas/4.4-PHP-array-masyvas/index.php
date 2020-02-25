<?php

$mas = ['Home', 'About', 'Gallery', 'Contant'];
// print_r( $mas );  // test isveda array || obj || sting
// var_dump( $mas ); // test isveda array || obj || sting + Type
?>

<nav>
    <ul>
        <?php
            for ($i=0; $i < 4; $i++) {
                echo "<li>" . $mas[$i]  . "</li>";
                echo "<li>   $mas[$i]     </li>";
                echo "<li>  {$mas[$i]}    </li>";
            }
        ?>
    </ul>
</nav>
<!-- 2uxduotis FOTO isvedimas -->
<?php
    $fotos = ['1.jpg', '2.jpg', '3.jpg', '4.jpg'];
    for ($i=0; $i < count($fotos); $i++) {
         echo "<img src='img/$fotos[$i]' alt='logotipas' width='25%'>";
    }
 ?>
