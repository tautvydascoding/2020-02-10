<?php

// $mas = ["home","about","gallery","contact","blog"];
// print_r( $mas); // test isveda array || objektus || stringus
//
// for ($i=0; $i <5 ; $i++) {
//     echo "<li>" . $mas[$i] . "</li>";
// }

?>

<!-- // for ($i=0; $i < 6; $i++) {
// include(index.html);
// } -->



    <nav>
    <ul>
        <?php

        $mas = ["home","about","gallery","contact","blog"];
        // print_r( $mas); // test isveda array || objektus || stringus

        for ($i=0; $i <5 ; $i++) {
            echo "<li>" . $mas[$i] . "</li>";
            echo "<li>" . $mas[$i] . "</li>";
            echo "<li>" . $mas[$i] . "</li>";
        }
        ?>
    </ul>
</nav>

<?php

$fotos = ['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg'];
 ?>
<img src="1.jpg" alt="1 foto" width="10%">
<img src="2.jpg" alt="2 foto" width="10%">
<img src="3.jpg" alt="3 foto" width="10%">
<img src="4.jpg" alt="4 foto" width="10%">
<img src="5.jpg" alt="5 foto" width="10%">

<?php

for ($i=0; $i < 5 ; $i++) {
echo "<img src='$fotos[$i]' alt='foto' width ='10%'>";
}
 ?>
