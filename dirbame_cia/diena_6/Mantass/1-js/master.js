console.log(" as veikiu");
// ==============patarimai==========
        // reiksme  - kintamasis  / variable
        // "reiksme" - tekstas/ reiksme/ value
        // reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:
// document.write(" <b class='bg-info'> Tekstas su js </b> ");
// document.write(" Mano tekstas ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// // console.log(ivestasTekstas);
// let ivestasTekstas = prompt ("Iveskite savo varda")
// console.log(ivestasTekstas);
// let x = 10
// alert("mano js veikia" + x);
// document.querySelector('h1').innerHTML +="ivedamas tekstas";
// console.log(document.querySelector('#logo'));

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:
document.querySelector("h1").backgroundColor = "pink";
document.querySelector("h1").classList.add("bg-info");
//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);
function printKaina(x) {
    console.log("kaina:" + x);
    document.querySelector("body").innerHTML += x+"<br>";
}
printKaina(999);
printKaina(13.49);
printKaina(100.05);


// dalinti(x,y)
// daugina 3 skaiciai
// sudeti 4 skaicius
// atimtis 5 skaicius

// x=a/b
// y=a*b*c
// z=a+b+c+d
// w=a-b-c-d-e

// console.log(a,b);


function dalinti( a,b ) {
    let ats = a/b;
console.log( "padalinus a/b: " + ats);
}
dalinti(200,2);
dalinti(2,200);
dalinti(300,2);


function dauginti (a,b,c) {
    let ats = a*b*c;
    console.log( "padauginus a*b*c: " + ats);
}
dauginti (100,2,2)

function sudeti (a,b,c,d) {
    let ats = a+b+c+d;
    console.log("sudejus a+b+c+d:" + ats);
}

sudeti (100,1,1,1);

function atimti (a,b,c,d,e) {
    let ats = a-b-c-d-e;
        console.log("atemus a-b-c-d-e:" + ats);
    }
atimti(1,1,1,1,1)


//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);


function vidurkis (a,b,c,d,e) {
let ats = ((a+b+c+d+e)/5)
    console.log("vidurkis:" + ats);
return ats}
vidurkis (5,10,8,6,8)



// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


//=====================RETURN==================
function getVardas() {
    let vardas = "Tomas";
    return vardas;
}
console.log(getVardas() + "Tomaitis");
console.log(getVardas());
// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja
function getVardasPavarde() {
    let vardas = "Antanas";
    let pavarde = "Tomauskas";
    return vardas + pavarde; //string sulipdome is keliu gabalu
}
    console.log(getVardasPavarde());
document.querySelector('body').innerHTML += getVardasPavarde()
// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja
// function getPelnas() {
//     let pajamos = 13500;
//     let islaidos = 7500;
//     let pelnas = pajamos - islaidos;
//     return pelnas;
// }
//     console.log("sausio pelnas: " + getPelnas());
//     console.log("vasario pelnas: " + getPelnas());
//     console.log("kovo pelnas: " + getPelnas());


    function getPelnas22(pajamos, islaidos) {
        let pelnas = pajamos - islaidos;
        return pelnas;
    }
        console.log("sausio pelnas: " + getPelnas22(6000, 4000));
        console.log("vasario pelnas: " + getPelnas22(10000, 6000));
        console.log("kovo pelnas: " + getPelnas22(5000, 1000));
// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja


// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas22(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPazymiuVidurkis2 (a,b,c,d,e) {
    let vidurkis = (a+b+c+d+e)/5
    return vidurkis;
}
        console.log("Ievos vidurkis: " + getPazymiuVidurkis2(10,10,10,10,9));
        console.log("Domo vidurkis: " + getPazymiuVidurkis2(2,2,3,2,2));
// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.

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

// UZDUOTIS - f-jos return

var valandinisIkainis = 10
var valandosPovilas = 160
var valandosAntanas = 80
var valandosTomas   = 100
var imonespajamos = 20000
var kitosislaidos = 3400
var visiAtlyginimai;
function getDarbuotojoAtlyginimas(valandos, valandinisIkainis) {
    var valandos = 10 * (160+80+100);
    return alga;
}
document.querySelector('body').innerHTML += getDarbuotojoAtlyginimas()


function getImonesPelnas(pajamos, kitosIslaidos, atlyginimai) {
    let pelnas = pajamos-kitosimonesislaidos-valandos;
}




// failo virusje sukurti kintamuosius:
// valandinisIkainis = 10
// valandos Povilas = 160
// valandos Antanas = 80
// valandos Tomas   = 100
// imones pajamos = 20000
// kitos imones islaidos = 3400
//  UZDUOTIS:
//  1) sukurti  f-ja: getDarbuotojoAtlyginimas
// //  1.2) paleisti tiek kartu kiek turime darbuotoju
//  2) sukurti  f-ja: getImonesPelnas
//  2.2) isvesti apskaiciuota pelna i console ar ekrana
