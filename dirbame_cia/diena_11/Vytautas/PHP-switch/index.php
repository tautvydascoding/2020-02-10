<?php

// $vardas = "Rokas";
//
//
// switch ($vardas) {
//     case 'Tomas':
//             echo "Jusu vardas Tomas";
//             echo "Jusu vardas Tomas";
//         break;
//     case 'Justas':
//             echo "Jusu vardas Justas";
//             echo "Jusu vardas Justas";
//         break;
//     case 'Rokas':
//             echo "Jusu vardas Rokas";
//         break;
//
//     default:
//             echo "Jusu vardo nera musu sistemoje";
//         break;
// }

// PASIZIURETI KAS YRA PHP, js "Switch"



  // UZDUOTIS  "Switch"
 // paduoti varda ir Jeigu jis lygus:
 // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
 // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
 // "opel" - atspausdinti "Susimastykite apie naujus priedus"

$marke = "  aUdi  ";

//tekstas mazosiom raidem
$vardasMazosiom = strtolower($marke);
echo "$vardasMazosiom <br>";
//pasalinsim tarpus
$vardasMazomBeTarpu = trim($vardasMazosiom);
//uzkoduoja visus <,>, kabutes, spec zenklus ENT_QUOTES-dideles kabutes
$saugusVardas = htmlspecialchars($vardasMazomBeTarpu, ENT_QUOTES);

switch ($vardasMazomBeTarpu) {
    case 'audi':
            echo "Susimastykite apie variklio prieziura";
            break;

    case 'BMW':
            echo  "Susimastykite apie greiti ir vairavimo kultura";
            break;

    case 'opel':
            echo "Susimastykite apie naujus priedus";
        break;

    default:
            echo "Jusu markes nera sistemoje";
        break;
}
