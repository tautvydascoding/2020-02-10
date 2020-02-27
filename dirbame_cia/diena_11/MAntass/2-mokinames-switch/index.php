<?php

// $vardas = "Tomas"
//
// switch ($vardas) {
//     case "Tomas":
//         echo "Jusu vardas Tomas";
//         echo "jusu vardas Tomas";
//         break;
//     case "Rokas":
//         echo "Jusu vardas Rokas";
//         echo "jusu vardas Rokas";
//         break;
//     case "Mantas":
//         echo "Jusu vardas MAntas";
//         echo "jusu vardas Mantas";
//         break;
//
//         default:
//         echo "Jusu vardo nera atitikmens";
//         break;
// }

// PASIZIURETI KAS YRA PHP, js "Switch"
$vardas = "mantAS         ";
$vardasMazosiom = strtolower($vardas);
echo $vardasMazosiom;

$vardasMazomBeTarpu = trim( $vardasMazosiom);
echo $vardasMazomBeTarpu;

$saugusVardas = htmlspecialchars( $vardasMazomBeTarpu, ENT_QUOTES);
echo $saugusVardas;
// switch ($masina) {
//     case 'Audi':
//     echo "Susimastykite apie variklio prieziura";
//     break;
//     case 'BMW':
//     echo "Susimastykite apie greiti ir vairavimo kultura";
//     break;
//     case 'Opel':
//     echo "Susimastykite apie naujus priedus";
//     break;
// }


  // UZDUOTIS  "Switch"
 // paduoti varda ir Jeigu jis lygus:
 // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
 // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
 // "opel" - atspausdinti "Susimastykite apie naujus priedus"
