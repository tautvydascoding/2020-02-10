
console.log(" as veikiu");
console.log("Siandien mokinuosi su JavaScript");
// window.alert("labas");
// alert("Viso gero");
// let x = 10;
// alert("mano js veikia" + x);


let ivestasTekstas = prompt("Mano vardas Barnis");
console.log(ivestasTekstas);


// document.write("Paketas su JS");
// document.write(" <b class='bg-info'> geriausias pasaulyje</b> ");
//
//
// console.log(  document.querySelector('nesamone') ); // null - neegzistuojantis elementas.
//
// var aukstis = document.querySelector('h1').clientHeight;
//
// var aukstis = document.querySelector('h1').style.height= "500px";
// var aukstis = document.querySelector('h1').style.backgroundColor= "pink";
//
// var aukstis = document.querySelector('h1').classList.add('bg-info');
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================


//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

function printKaina(x) {
    console.log("kaina: " + x);
}
printKaina(15.99);


//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

function printKaina(x) {
    console.log("kaina: " + x);
}
printKaina(999);

function printKaina(x) {
    console.log("kaina: " + x);
}
printKaina(13.49);

function printKaina(x) {
    console.log("kaina: " + x);
}
printKaina(100.05);


function printKaina(x) {
    console.log("kaina: " + x);
    document.querySelector('body').innerHTML += x + "<br>";
}
printKaina(15.99);
printKaina(999);
printKaina(105.05);

// 1.3 UZDUOTIS

// sukurti 4 matematine f-pajamos
// dalinti 2 parametrai
// dauginti 3 parametrai
// suma 4 parametrai
// atimtis 5 parametrai
// pvz: atimtis(100, 2); // ats = x / y;
// pvz: atimtis(100, 1, 1, 1, 1);

function dalinti(x, y, r, e) {
    let ats = x /y /r /e;
    console.log( "padalinus x / y /r /e : " + ats);
}
dalinti(200, 2, 13, 23);

// function dalinti(x, y) {
//     let ats = x /y;
//     console.log( "padalinus 2 / 200: " + ats);
// }
// dalinti(2, 200);

function dauginti(x, y, c, b, z) {
    let ats = x * y * c * b * z;
    console.log( "padauginus x * y * c * b * z: " + ats);
}
dauginti (200, 2, 100, 50, 150);

// function dauginti(x, y) {
//     let ats = x *y;
//     console.log( "padauginus 200 * 2: " + ats);
// }
// dauginti (2,2);

function atimtis(x, y, n, m, c) {
    let ats = x -y -n -m -c;
    console.log( "atemus x - y -n -m -c: " + ats);
}
atimtis (2,4,6,8,10);

function suma(x, y, g, d,) {
    let ats = x +y +g +d;
    console.log( "sudejus x + y +g +d: " + ats);
}
suma (3,5,7,9);




// 2.1 UZDUOTIS
// parasyti f-ja "v", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// function v( x , y , b , c , d) {
//     x = 5;
//     y = 10;
//     b = 8;
//     c = 6;
//     d = 8;


// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function v( x , y , b , c , d , ) {
    let atsakymas = (x + y + b + c + d) /5;
    console.log( "padarius x+y+b+c+d /5: " + atsakymas);
}
v (5,10,8,6,8,);


//=====================RETURN==================

function skaiciuotiPajamas(x1, x2) {
    let ats = x1 + x2;
    return ats;
}
// console.log (   ats  ); // ERROR - not defined variable

skaiciuotiPajamas(1000, 1500) * 0.21;
console.log ( skaiciuotiPajamas * 0.21 ); // skaiciuojami mokesciai

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja

 function getVardas() {
     let vardas = "Tomas";
     return vardas;
 }
     console.log(getVardas() +' Petraitis' );
     console.log(getVardas() +' Tomaitis');
     console.log(getVardas() +' Mykolas' );


// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
let Vardas = "Antanas";
let Pavarde = " Tomauskas";
return Vardas + Pavarde;
}
console.log(getVardasPavarde() );


// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas() {
    let pajamos = 12500;
    let islaidos = 7500;
    return pajamos - islaidos;
}
console.log(getPelnas() );

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas22(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas22(pajamos, nuostoliai) {
    return pajamos - nuostoliai;
}
    console.log(getPelnas22(111, 22) );
    console.log(getPelnas22(111, 22) );
    console.log(getPelnas22(111, 22) );
    console.log(getPelnas22(111, 22) );

// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.

function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    return x1 + x2 + x3 + x4 + x5 ;
}
console.log(getPazymiuVidurkis2(3, 8, 10, 4, 6 ) /5 );

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// function getH1ElementoAukstis() {
//     return ;
// }
// console.log(getH1ElementoAukstis() );


var aukstis = document.querySelector('h1').style.height= "300px";
function getH1ElementoAukstis() {
    var aukstis2 = document.querySelector('h1').clientHeight;
    return aukstis2;
}
console.log(getH1ElementoAukstis() );

// UZDUOTIS - f-jos return
// failo virusje sukurti kintamuosius:
// valandinisIkainis = 10
// valandos Povilas = 160
// valandos Antanas = 80
// valandos Tomas   = 100
// imones pajamos = 20000
// kitos imones islaidos = 3400
//  UZDUOTIS:
//  1) sukurti  f-ja: getDarbuotojoAtlyginimas
//  1.2) paleisti tiek kartu kiek turime darbuotoju
//  2) sukurti  f-ja: getImonesPelnas
//  2.2) isvesti apskaiciuota pelna i console ar ekrana
//
// function getDarbuotojoAtlyginimas() {
//     var valandinisIkainis = 10;
//     var valandosPovilas = 160;
//     var valandosAntanas = 80;
//     var valandosTomas = 100;
//     var imonesPajamos = 20000;
//     var kitosImonesIslaidos = 3400;





// =================FOR intro  ======================
// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====
