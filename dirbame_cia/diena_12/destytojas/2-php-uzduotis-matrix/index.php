<?php


 $auto1 = ['Audi', 250000, 4000, "KNS"];
 $auto2 = ['BMW',  300000, 4200, "VLN"];
 $auto3 = ['Opel', 150000, 5000, "KNS"];

//          0         1       2
 $autos = [$auto1, $auto2, $auto3]; // matrica - masyvas masyve

 // 1) uzduotis isvesti i ekrana autos
 print_r( $autos );   // isvedimas test
 echo "<hr>";

 for ($i=0; $i < count($autos); $i++) {
      print_r( $autos[$i] );
       echo "<br>";
 }

  echo "<hr>";
 for ($i=0; $i < count($autos); $i++) {
       echo $autos[$i][1] . " " .  $autos[$i][3] ."<br>";
 }
 // 2) padidinti Audi rida
  $autos[0][1] = 299999;
 // 3) pakeisti BMW miesta
  $autos[1][3] = "Klaipeda";

// test ar pavyko
  for ($i=0; $i < count($autos); $i++) {
       print_r( $autos[$i] );
        echo "<br>";
  }

 //
