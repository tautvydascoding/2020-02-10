<?php


// $vardas = "Tomas";
//
//
// switch ($vardas) {
//     case "Tomas":
//         echo "Jusu vardas Tomas";
//         echo "Jusu vardas Tomas";
//         break;
//     case "Rokas":
//         echo "Jusu vardas Rokas"
//         break;
//     case "Lukas":
//         echo "Jusu vardas Lukas"
//         break;
//     case "Arnas":
//         echo "Jusu vardas Arnas"
//         break;
//     default:
//         echo "Jusu vardo nera musu sistemoje";
//         break;
// }

// PASIZIURETI KAS YRA PHP, js "Switch"



  // UZDUOTIS  "Switch"
 // paduoti varda ir Jeigu jis lygus:
 // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
 // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
 // "opel" - atspausdinti "Susimastykite apie naujus priedus"

$vardas = " RokaS    s";

// teksta versime mazosiom
$vardasMazosiom = strtolower($vardas);
echo "$vardasMazosiom <br>";
// pasalinsim tarpu
$vardasMazomBeTarpu = trim ( $vardasMazosiom );

$auto = "audi";
 "bmw";
 "opel";

switch ($auto) {
    case "audi":
        echo " Susimastykite apie variklio prieziura <br>";
         break;

    case "bmw":
        echo "Susimastykite apie greiti ir vairavimo kultura <br>";
        break;

    case "opel":
        echo "Susimastykite apie naujus priedus <br>";
         break;
}
