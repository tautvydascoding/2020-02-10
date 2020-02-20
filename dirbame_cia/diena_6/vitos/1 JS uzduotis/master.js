console.log(" as veikiu");

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write(" tekstas su JS ");
document.write(" <b class='bg-info'> Mano tekstas </b> ");

// window.alert("labas");
// alert("Viso");

// let ivestasTekstas = prompt("Iveskite savo varda");
// console.log(ivestasTekstas);

console.log(  document.querySelector('h1')  );

//  null, nes dar neegziistuojantis elementas ar klaida...
// console.log(  document.querySelector('#logo')  );

console.log(  document.querySelector('body b')  );

document.querySelector('h1').innerHTML += " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.

// aukscio nustatymas:

// document.querySelector("h1").style.height = "200px";
// document.querySelector("h1").style.backgroundColor = "blue";
// document.querySelector("h1").classList.add('bg-warning');

// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

function printKaina(x){
    console.log("kaina:" + x);
}

printKaina(10.99);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

function printKaina(x){
    console.log("kaina:" + x);
    document.querySelector('body').innerHTML += x + "<br>";
}

printKaina(15.99);
printKaina(77.99);
printKaina(388.99);


// uzduotis papildomai: keturios funkcijos

function dalinti(x,y){
    let ats = x / y;
    console.log("padalinus x/y = " + ats);
    document.querySelector('body').innerHTML += ats + "<br>";
}
dalinti(-50,2);

function dauginti(x,y,z){
    let ats2 = x * y * z;
    console.log("sudauginus x*y*z = " + ats2);
    document.querySelector('body').innerHTML += ats2 + "<br>";
}
dauginti(-2,-2,-2);

function suma(w,x,y,z){
    let ats3 = w + x + y + z ;
    console.log("sudejus 4 nezinom. = " + ats3);
    document.querySelector('body').innerHTML += ats3 + "<br>";
}
suma(-2,2,-2,2);

function atimtis(a,b,x,y,z){
    let ats4 = a - b - x - y - z ;
    console.log("atemus 5 nezinom. = " + ats4);
    document.querySelector('body').innerHTML += "atimties " + ats4 + "<br>";
}
atimtis(-1,-1,-1,-1,-1);


// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

let paz1 = 6;
let paz2 = 7;
let paz3 = 8;
let paz4 = 5;
let paz5 = 9;

function pazymiuVidurkis (){
    let pazVid = (paz1 + paz2 + paz3 + paz4 + paz5) / 5;
    console.log(pazVid);
}
pazymiuVidurkis ();


// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)




//=====================RETURN==================

// pavyzdinis

function sumas(x1,x2){
    let ats = x1 + x2;
    return ats;
}
let pirkiniai = sumas (10,6);
console.log(pirkiniai);

let mokesciai = pirkiniai * 0.21;
console.log(mokesciai);

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja

function getVardas (){
    let vardas = "Jonukas";
    return vardas;
}
console.log(getVardas());
console.log(getVardas() + " Jonaiciu ");


// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde (){
    let vardas = "Jonukas";
    let pavarde = "Pavardes";

    return vardas + pavarde;
}
console.log(getVardasPavarde());

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja

function getPelnas (){
    let pajamos = 12500;
    let islaidos = 7400;
    let pelno = pajamos - islaidos;
    return pelno;
}
console.log(getPelnas());


// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas22(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas22 (pajamos, nuostoliai){
    let pelno = pajamos - nuostoliai;
    return pelno;
}
console.log("sausis :  " + getPelnas22(700,222));
console.log("vasaris :  " + getPelnas22(800,333));
console.log("kovas :  " + getPelnas22(900,444));


// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.

function getPazymiuVidurkis2 (x1, x2, x3, x4, x5){
    let pazymiuVidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    return pazymiuVidurkis;
}
console.log("vidurkis :  " + getPazymiuVidurkis2(10,9,10,7,8));

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// document.querySelector('h1').innerHTML += " <b>Antraste</b>";
// document.querySelector("h1").style.height = "200px";
// document.querySelector("h1").style.backgroundColor = "blue";
// document.querySelector("h1").classList.add('bg-warning');

// function getH1Element(bandymai){
//     var h = document.createElement("H1");
//     var t = document.createTextNode(text);
//     h.appendChild(t);
//     document.body.appendChild(h);
//     return
// }
//
// getH1Element("First H1");
// getH1Element("Second H1");


// ===================================================
 // kopija is 6 dienos antros uzduoties
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

 let valandIkainis = 11;
 let imonesPajamos = 20000;
 let kitosIslaidos = 3400;

 function getDarbuotojoAtlyginimas (valandos){
     let darbuotoju = valandIkainis * valandos;
     return darbuotoju;
 }
 console.log("Povilas :  " + getDarbuotojoAtlyginimas(160));
 console.log("Antanas :  " + getDarbuotojoAtlyginimas(80));
 console.log("Tomas :  " + getDarbuotojoAtlyginimas(100));

 let visiAtlyg = getDarbuotojoAtlyginimas(160) + getDarbuotojoAtlyginimas(80) + getDarbuotojoAtlyginimas(100);
console.log(visiAtlyg);

 function getImonesPelnas (){
     let pelno3 = imonesPajamos - visiAtlyg - kitosIslaidos;
     return pelno3;
 }
 console.log("pelnas bus :  " + getImonesPelnas());

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
