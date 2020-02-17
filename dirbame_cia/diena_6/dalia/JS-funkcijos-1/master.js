console.log(" as veikiu");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write(" tekstas su JS");
document.write(" <b class='bg-info'> Mano tekstas </b> ");


// window.alert("labas");
// alert("Viso");
// let ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
console.log(document.querySelector('body b'));
console.log(document.querySelector('kazkas'));

document.querySelector('h1').style.height = "500px";
document.querySelector('h1').backgroundColor = "pink";
document.querySelector('h1').classList.add("bg-info");

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

    document.querySelector('body').innerHTML += x + "<br>";
}
printKaina(15);
printKaina(20);
printKaina(21);


function dalinti (x,y) {
    console.log( x / y);
}
dalinti(10,2);

function dauginti (x,y,z) {
    console.log( x * y * z);
}
dauginti (2,2,3);

function sudeti (a,b,c,d) {
console.log( a + b + c + d );

}
sudeti(3,5,6,7);

function atimti (a,b,c,d,e){
    console.log( a - b - c - d - e );
}
atimti (100, 45, 3, 5, 5);

function sudeti (a,b,c){
let ats = a + b + c;
    document.querySelector('body').innerHTML += ats + "<br>";
}
sudeti (100, 45, 3);

function atimti (a,b,c){
let ats = a - b - c;
    document.querySelector('body').innerHTML += ats + "<br>";
}
atimti (100, 45, 3);

function dauginti (x,y,z) {
    let ats = x * y * z;
    document.querySelector('body').innerHTML += ats + "<br>";

}
dauginti (-2, -2, -3);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)



// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis(x1,x2,x3,x4,x5) {
    let vidurkis = ( x1 + x2 + x3 + x4 + x5 )/5;
    document.querySelector('body').innerHTML += vidurkis + "<br>";
}
pazymiuVidurkis (5,10,8,6,8);

//=====================RETURN==================

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja

function getVardas(){
    let vardas = "Tomas";
    return vardas;
}
console.log( getVardas() +  " Petraitis");
console.log( getVardas() +  " Petraitis");
console.log( getVardas() +  " Petraitis");

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde(){

    let vardas = "Tomas";
    let pavarde = "Petraitis";
    let tekstas = vardas + " " + pavarde;
    return tekstas;


document.querySelector('body').innerHTML += getVardasPavarde();
}

// console.log(getVardasPavarde());
// alert(getVardasPavarde());


// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas(){
    let pajamos = 100;
    let islaidos = 30;
    let pelnas = pajamos - islaidos;
    document.querySelector('body').innerHTML += pelnas + "<br>";
    return pelnas;
}
getPelnas();
// console.log("sausio pelnas: " + getPelnas());
// console.log("vasario pelnas: " + getPelnas());
// console.log("kovo pelnas: " + getPelnas());
// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas22(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas2( pajamos, islaidos ){
    let pelnas = pajamos - islaidos;

    document.querySelector('body').innerHTML += pelnas + "<br>";
    return pelnas;
}
getPelnas2(2000,500);
// 3.2 UZDUOTIS
// 4.1 UZDUOTIS

// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.
function getPazymiuVidurkis2 (x1, x2, x3, x4, x5){
    let ats = (x1+x2+x3+x4+x5)/5;
    document.querySelector('body').innerHTML += ats + "<br>";
    return ats;
}
getPazymiuVidurkis2(7,6,5,10,10);
getPazymiuVidurkis2(7,6,10,10,10);
getPazymiuVidurkis2(8,10,10,10,10);

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

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
