<?php

include('models/loginas.php');
include('models/funkc-gaminiai.php');


print_r($_GET);
// print_r($_POST);

$id =$_GET['nr'];
$foto = getFotos( $id );

$gaminys = getGaminys($id);


print_r($gaminys);
print_r($foto);
echo "<br />";
echo "<h4>". $gaminys['preke']."</h4>";
// echo "<img src='img/{$gaminys['foto']}' width='100px' height='100px'>";


 $visiFotosOBJ =  getFotos($id);
 // // is Mysqli Obj. paima viena eilute ir pavercia i array/masyva:
 $foto = mysqli_fetch_assoc($visiFotosOBJ);
 // // test
 // // print_r($gydytojas1);
 // //------------------
 while($foto) {
     echo "<img src='img/{$gaminys['foto']}' width='100px' height='100px'>";
     // klaustukas del kreipinio
     // echo "<h2>". $gydytojas['name']. $gydytojas['lname'] ."</h2>";
     $foto = mysqli_fetch_assoc($visiFotosOBJ);
 }

 // $manoSQL = "SELECT gaminiai.preke, gaminiai.aprasas  FROM gaminiai INNER JOIN nuotraukos ON gaminiai.id = nuotraukos.prekes_id WHERE prekes_id = $id";

 // function getFotos($id) {
 //     $manoSQL = "SELECT fotos.naujienos_id, fotos.id, fotos.name FROM fotos INNER JOIN naujienos ON fotos.naujienos_id = naujienos.id WHERE naujienos.id = $id";
 //     $rezultatas = mysqli_query( getPrisijungimas(),  $manoSQL  );
 //     if ( $rezultatas == false) {   // !$arPavyko
 //         echo "ERROR nepavyko sukurti: $id <br>";
 //     }
 //     return $rezultatas;
 // }

 ?>







<!-- <article class="col-md-4 gallery">

        <h3>Preke</h3>
        <img src="img/pav1.jpg" width="100px" height="100px">
        <h4>aprasymas</h4>
        <p>dydis</p>
        <h4>Kaina</h4>
</article> -->
