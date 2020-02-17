console.log(" as veikiu");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write(" teketsa  su js ");
document.write(" <b class='bg-info'> Mano tekstas </b> ");

// window.alert("labas");
//
// let x = 10;
// alert("mano js veikia" + x);

// let ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);

// null nes nerado
document.querySelector(' neegzistuojantis elementas');

console.log(   document.querySelector(' nesamone')   );

document.querySelector('h1').innerHTML += " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:
document.querySelector("h1").style.backgroundColor = "pink";    // change the height of a <div> element:

document.querySelector("h1").classList.add('bg-info');

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);
function printKaina(x) {
    console.log("kaina: " + x);
    //sunkesnis budas
    document.querySelector('body').innerHTML +=    x + "<br>";
}
printKaina(15.99);
printKaina(999);
printKaina(105.00);

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

// 1.3 UZDUOTIS
// sukurti 4-rias f-jas:

// dalinti   2 paramertai
// dauginti  3 paramertai
// suma     4 paramertai
// atimtis  5 paramertai

// pvz:    dalinti(100, 2);     // ats = x / y;
// pvz:    atimtis(100, 1, 1, 1, 1);
function dalinti(x, y) {
    let ats = x / y;
    console.log( "padalinus x / y: " + ats);
}
dalinti(200, 2);
dalinti(2, 200);

function dauginti(x, y, z) {
    let ats = x * y * z;
    console.log( "dauginti x * y * z: " + ats);
}
dauginti(1, 2, 3);
dauginti(2, 2, 2);

function suma(x, y, z, f) {
    let ats = x + y + z + f;
    console.log( "suma   : " + ats);
}
suma(1, 2, 3, 4);
suma(2, 2, 2, 2);

function atimtis(x, y, z, f, g) {
    let ats = x - y - z - f - g;
    console.log( "atimtis   : " + ats);
}

 atimtis(1, 1 ,1,1,1    );   // Petro atimtis
atimtis(-2, -2, -2, -2, -2); // Martynas atimtis

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


//=====================RETURN==================
function skaiciuotiPajamas(x1, x2) {
    let ats = x1 + x2;
    return ats;
}
//console.log(   ats  );  // ERROR - not defined variable
let pajamos = skaiciuotiPajamas(1000, 1500);
console.log(   pajamos * 0.21 ); // skaicuojam mokesciu 21pvm

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja
function getVardas() {
    let vardas = "Tomas";
    return vardas;
}
console.log(    getVardas()  );
console.log(    getVardas() + " Tomaitis" );
console.log(    getVardas()  );


// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

// f-jos sukurimas
function getVardasPavarde() {
    let vardas = "tomas";
    let pavarde = "tomaitis";
    let tekstas = vardas + " " + pavarde; // string sulipdome is keliu gabalu
    return tekstas;
}
// alert(   getVardasPavarde() );

// f-jos paleidimas
console.log(    getVardasPavarde()  );
// arba
document.querySelector('body').innerHTML += getVardasPavarde() + "<br>";

// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja
function getPelnas() {
    let pajamos = 13500;
    let islaidos = 7500;
    let pelnas = pajamos - islaidos;
    return pelnas;
}
console.log( "sausio pelnas: " + getPelnas() );
console.log( "vasario pelnas: " + getPelnas() );
console.log( "kovas pelnas: " + getPelnas() );

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas22(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja
function getPelnas22( pajamos, islaidos) {
    let pelnas = pajamos - islaidos;
    return pelnas;
}
console.log( "sausio pelnas: "  + getPelnas22(6000, 4000) );
console.log( "vasario pelnas: " + getPelnas22(10000, 6000) );
console.log( "kovas pelnas: "   + getPelnas22(5000, 6000) );

// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.
function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    let ats = (x1 + x2 + x3 + x4 + x5) / 5;
    return ats;
}
console.log("Ieva: "    + getPazymiuVidurkis2(4,4,5,7,4)  );
console.log("Antanas: " + getPazymiuVidurkis2(8,8,8,8,8)  );
console.log("TOmas: "   + getPazymiuVidurkis2(4,4,0,0,4)  );
console.log("Aris: "    + getPazymiuVidurkis2(10,10,10,10,5)  );

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
