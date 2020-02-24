<?php


// 1
    // UZDUOTIS  "Switch"
    // paduoti varda ir Jeigu jis lygus:
    // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
    // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
    // "opel" - atspausdinti "Susimastykite apie naujus priedus"




$vardas = "    opEl   ";

// 2 --- raidziu dydis kad butu nesvarbu
$vardasMazosiom = strtolower($vardas);


// 3 ---- tarpo naikinimas
$vardasMazosiomBeTarpu = str_replace(' ', '', $vardasMazosiom);


// 4 ----- uzkoduojam visus specialius simbolius
$saugusVardas = htmlspecialchars ( $vardasMazosiomBeTarpu, ENT_QUOTES );


// 5 --- visos komandos vienoje




switch ($vardasMazosiomBeTarpu) {
    case 'audi': 
            echo "Jusu vardas audi <br>";
        break;
    
    case 'bmw': 
            echo "Jusu vardas BMW <br>";
        break;    
     
    case 'opel': 
        echo "Jusu vardas opel <br>";
        break;

    default:
        echo "Jusu vardo nera musu sistemoje <br>";
        break;
}


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


?>