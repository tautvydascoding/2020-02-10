<?php
// UZDUOTIS
// 1.1 index.php faile sukurti 2 kintamuosius $vardas, $pavarde
$vardas = 'Andrius';
$pavarde = 'Andriauskas';
// 1.2 index.php faile sukurti masyva: 'straipnis' = ['antraste', 'aprasymas', 'data'];
$straipnis = ['BMW vel preleke saligatviu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2010-12-01'];
// pvz:   'BMW vel preleke saligatviu',   'Lorem lorem....', '2010-12-01'

// 2. index.php faile  ideti:
// include( 'straipsnis.php');

// include 'straipsnis.php';
for ($i=0; $i < 6 ; $i++) {
    include 'straipsnis.php';
}
// include_once 'straipsnis.php'; //kai viena karta ikelti nori
// require ('footer.php---') //dedama kur labai svarbus failai ir butina juos uzkrauti
// require_once ('footer.php---') //kai viena karta svarbus failas

// 2.0. suskurti faila:  straipsnis.php
// 2.1 straipsnis.php faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde
// 2.2 straipsnis.php faile sukurti   'container' 'main' 'article'
// 2.3 'article' videje sukurti:
// 2.3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
// 2.3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
// 2.3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo)
