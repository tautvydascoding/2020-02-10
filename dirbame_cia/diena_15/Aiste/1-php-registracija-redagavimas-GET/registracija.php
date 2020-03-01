<!-- 1. index.php faile sukurti HTML form'a naudojant metoda (GET)
 ir  su ivedimo laukais (ivedimo laukams nustatyti name='vardas...'):
 vardas, pavarde, telefonas, mygtukas 'registruotis'

2. kai paspaudzia 'registruotis',
 vartotoja perkelti i registracija.php faila
 (formoje action='registracija.php')

3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti vartotojo ivestu duomenis
pvz.:
print_r( $_GET);

// PASIBANDYTI PAPILDOMAI
pvz.: print_r( $GLOBALS)



// UZDUOTIS
// pasisveikinti su katik uzsiregistravusius zmogumi ir
// graziai atspausdinti uzsiregistravusio zmoguas duomenis -->

<?php

print_r(   $_GET   );
echo "<hr>";

// print_r( $GLOBALS);


// 1  budas isvesti - dazniausiai naudojamas
echo "Jusu vardas: " . $_GET['vardas'] . "<hr>";


// 2 budas isvesti
echo "Jusu pavarde: $_GET[pavarde]  <hr>";

// 3 budas isvesti
echo "Jusu tel: {$_GET['tel']}  <hr>";


echo "Jusu duomenus: $_GET[vardas]  $_GET[pavarde]  $_GET[tel]";

echo "<hr>";
?>



<?php


// 1. sukurti index.php
// 2. parasyti PHP koda:
    // $x = $_GET['tekstas'];
    // echo $x;
// 3. pasileisti Narsykleje si puslapi
// 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
    // ?tekstas=Mano ivestas tekstas

// 4. Narsykleje  pakeisti zodi "tekstas" i koki nors kitoki
// 4.1 istaisyti klaidas index.php faile



// $x = $_GET['vardas'];
// echo $x;
?>



