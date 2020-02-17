console.log(" as veikiu");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write(" tekstas su js ");
document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// let ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);

console.log( document.querySelector('#logo') );
document.querySelector('h1').innerHTML += " <b>Antraste</b>";
document.querySelector('h1').innerHTML += " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:
document.querySelector("h1").style.backgroundColor = "pink"; 		// change the height of a <div> element:
document.querySelector("h1").classList.add('bg-info');		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

function printKaina(x) {
    console.log("kaina:" + x);
    // sunkesnis budas
    document.querySelector('body').innerHTML += x + "<br>";
}
printKaina(15.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

printKaina(999);
printKaina(13.49);
printKaina(100.05);
// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// sukurti 4 matematines f-pajamos
// dalinti 2 parametrai
// dauginti 3 parametrai
// suma 4 parametrai
// atimtis 5 parametrai

// pvz:    dalinti (100, 2);        //ats = x / y;
// pvz:    atimtis (100, 1, 1, 1, 1);
function dalinti(x, y) {
    document.querySelector('body').innerHTML += x / y + "<br>";
}
dalinti(-50, 2)

function dauginti(x, y, a) {
    document.querySelector('body').innerHTML += x * y * a + "<br>";
}
dauginti(-2, -2, -2)

function suma(x, y, a, b) {
    document.querySelector('body').innerHTML += x + y + a + b + "<br>";
}
suma(-2, 2, -2, 2)

function atimtis(x, y, a, b, c) {
    document.querySelector('body').innerHTML += x - y - b - c + "<br>";
}
atimtis(-1, -1, -1, -1, -1)


// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis(x1, x2, x3, x4, x5) {
    document.querySelector('body').innerHTML += (x1 + x2 + x3 + x4 + x5)/5 + "<br>";
}
pazymiuVidurkis(5, 10, 8, 6, 8)

//=====================RETURN==================

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja

function skaiciuotiPajamas(x1, x2) {
    let ats = x1 + x2;
    return ats;
}
document.querySelector('body').innerHTML += skaiciuotiPajamas(1000, 1500) * 0.21 + "<br>";
// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde(){
    let vardas = "Tomas";
    let pavarde = "Tomauskas";
    return vardas + " " + pavarde;
}
document.querySelector('body').innerHTML += getVardasPavarde() + "<br>";
document.querySelector('body').innerHTML += getVardasPavarde() + "<br>";
document.querySelector('body').innerHTML += getVardasPavarde() + "<br>";

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas(){
    let pajamos = 12500;
    let islaidos = 7500;
    let pelnas = pajamos - islaidos;
    return pelnas;
}
document.querySelector('body').innerHTML += getPelnas() + "<br>";


// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas22(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas22(pajamos, nuostoliai) {
    let pelnas = pajamos - nuostoliai;
    return pelnas;
}
document.querySelector('body').innerHTML += "pelnas:" + " " + getPelnas22(500, 200) + "<br>";
document.querySelector('body').innerHTML += "pelnas:" + " " + getPelnas22(600, 200) + "<br>";
document.querySelector('body').innerHTML += "pelnas:" + " " + getPelnas22(800, 100) + "<br>";


// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.

function getPazymiuVidurkis2(x1, x2, x3, x4, x5){
    let pazymiuVidurkis = (x1 + x2 + x3 + x4 + x5)/5;
    return pazymiuVidurkis;
}
document.querySelector('body').innerHTML += "Antanas:" + " " + getPazymiuVidurkis2(5, 6, 7, 8, 9) + "<br>";
document.querySelector('body').innerHTML += "Petras:" + " " + getPazymiuVidurkis2(8, 8, 8, 8, 8) + "<br>";
document.querySelector('body').innerHTML += "Juozas:" + " " + getPazymiuVidurkis2(9, 5, 9, 5, 9) + "<br>";

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAukstis(){

}
document.querySelector("h1").style.height = "500px";

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
