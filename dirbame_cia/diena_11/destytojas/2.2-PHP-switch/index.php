<?php

$vardas = "  toMas       ";

// teksta versime mazosiom
$vardasMazosiom = strtolower($vardas);
// echo "$vardasMazosiom  <br>"; // test
// pasalinsim tarpus
$vardasMazomBeTarpu = trim( $vardasMazosiom );
// htmlspecialchars - uzkoduoja vius <'" spec. simmbolius
$saugusVardas = htmlspecialchars( $vardasMazomBeTarpu, ENT_QUOTES);

// optimizacija
// $vardas = htmlspecialchars(trim(strtolower($vardas)), ENT_QUOTES);

 switch ($vardasMazomBeTarpu) {
     case 'tomas':
            echo "Jusu vardas Tomas";
         break;
     case 'rokas':
            echo "Jusu vardas Rokas";
         break;
     case 'mantas':
            echo "Jusu vardas Mantas";
         break;
     default:
         echo "Jusu vardo nera atitikmens";
      break;
 }
