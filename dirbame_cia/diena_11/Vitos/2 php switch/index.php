<?php

// $vardas = "Saulius";
//
// switch ($vardas) {
//     case 'Tomas':
//         echo "Jusu vardas Tomas";
//         break;
//     case 'Justas':
//         echo "Jusu vardas Justas";
//         break;
//     case 'Rokas':
//         echo "Jusu vardas Rokas";
//         break;
//
//     default:
//         echo "vardo nera sistemoje";
//         break;
// }



// UZDUOTIS  "Switch"
// paduoti varda ir Jeigu jis lygus:
// "audi" - atspausdinti "Susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "Susimastykite apie naujus priedus"

$auto = " oPEL ";
$auto2 = strtolower($auto); // pakeisti mazosiomis
echo "$auto2 <br>"; //mazosiomis

$auto3 = trim($auto2);
echo "$auto3 <br>"; //panaikinti tarpus

//saugumas
$auto4 = htmlspecialchars($auto3, ENT_QUOTES);
echo "$auto4 <br>"; //


switch ($auto4) {
    case 'audi':
        echo "Susimastykite apie variklio prieziura";
        break;
    case 'bmw':
        echo "Susimastykite apie greiti ir vairavimo kultura";
        break;
    case 'opel':
        echo "Susimastykite apie naujus priedus";
        break;

    default:
        echo "Jusu auto vis dar geras";
        break;
}
