<?php


$vardas = "Ugne";

 switch ($vardas) {
     case 'Petras':
         echo "Jusu vardas Tomas <br />";// code...
         echo "Jusu vardas Tomas <br />";// code...
         echo "Jusu vardas Tomas <br />";// code...
         break;
     case 'Marius':
         echo "Jusu vardas Marius <br />";// code...
         echo "Jusu vardas Marius <br />";// code...
         echo "Jusu vardas Marius <br />";// code...
         break;
     case 'Darius':
         echo "Jusu vardas Darius <br />";// code...
         echo "Jusu vardas Darius <br />";// code...
         echo "Jusu vardas Darius <br />";// code...
         break;

     default:
        echo "Jusu vardas kitoks <br />"; // code...
         break;
 }

 // UZDUOTIS  "Switch"
// paduoti varda ir Jeigu jis lygus:
// "audi" - atspausdinti "Susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "Susimastykite apie naujus priedus"


$auto = "opel";
$auto2 = strtolower($auto); //verciam mazosiomis
$auto3 = trim($auto);// naikinam tarpus
$auto4 = htmlspecialchars ($auto, ENT_QUOTES); //uzkuodojam visus specialius simbolius
echo $auto2 . "<br />";
echo $auto3 . "<br />";


switch ($auto4) {
    case "audi":
        echo "Susimastykite apie variklio prieziura <br />";//
        break;

    case "BMW":
        echo "Susimastykite apie greiti ir vairavimo kultura <br />";//
        break;

    case "opel":
        echo "Susimastykite apie naujus priedus <br />";//
        break;

    default:
        // code...
        break;
}
