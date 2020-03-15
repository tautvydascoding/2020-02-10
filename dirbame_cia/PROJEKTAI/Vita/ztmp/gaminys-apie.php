<?php

include('models/loginas.php');
include('models/funkc-gaminiai.php');

echo "<hr />";

// print_r($_GET);
// print_r($_POST);

echo "<hr />";

$id =$_GET['nr'];
// $foto = getFotos( $id );

$gaminys = getGaminys($id);

// print_r($gaminys);
// print_r($foto);

echo "<hr />";

echo "<br />";
echo "<h4>". $gaminys['preke']."</h4>";
echo "<h4>". $gaminys['aprasas']."</h4>";
// echo "<img src='img/{$gaminys['foto']}' width='100px' height='100px'>";

echo "<hr />";



 $visiFotosOBJ =  getFotos($id);
 $foto = mysqli_fetch_assoc($visiFotosOBJ);
 // // test
 // print_r($foto);
 // Array ( [pavad] => pav3.jpg )
 // Array ( [preke] => kede-11 [aprasas] => patogi ir tvirta [pavad] => pav3.jpg )
 // //------------------
 while($foto) {
     echo "<img src='img/{$foto['pavad']}' width='200px' height='200px'>";
 //     // klaustukas del kreipinio
     $foto = mysqli_fetch_assoc($visiFotosOBJ);
 }



 ?>







<!-- <article class="col-md-4 gallery">

        <h3>Preke</h3>
        <img src="img/pav1.jpg" width="100px" height="100px">
        <h4>aprasymas</h4>
        <p>dydis</p>
        <h4>Kaina</h4>
</article> -->
