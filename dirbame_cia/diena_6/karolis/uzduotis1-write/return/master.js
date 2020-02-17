console.log(" as veikiu");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

//document.write(" tekstas su js ");
//document.write(" <b class='bg-info'> Mano tekstas </b> ");
//window.alert("labas");
//let x = 10;
//alert("mano js veikia" + x);
//alert("mano js veikia");
//var ivestasTekstas = prompt("Ivestkite savo varda");
//console.log(ivestasTekstas);

// console.log(document.querySelector('h1'));
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:
// document.querySelector("h1").style.backgroundColor = "pink"; 		// change the height of a <div> element: style stiprumas = 1000,
//
// document.querySelector("h1").classList.add('bg-info'); 		// change the height of a <div> element:  class

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

var x = 15.99;
function printKaina() {
  console.log(x);
}
printKaina();

//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);


function printPrice(x) {
  console.log("Price: " + x);
  //sunkesnis budas
  document.querySelector("body").innerHTML +=    x  + "<br>";
}
printPrice(999);
printPrice(13.49);
printPrice(100.05);


// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis(q,w,e,r,t) {
  var atsakymas = (q+w+e+r+t)/5;
  console.log(atsakymas);
}
pazymiuVidurkis(5,10,8,6,8);


//1.3 UZDUOTIS
//sukurti 4 matematines f-jas
//dalinti 2 parametrai
//dauginti 3 parametrai
//suma 4 parametrai
//atimtis 5 parametrai
//pvz:       dalinti(100, 2);    ats= x / y;
//atimtis:   atimtis(100, 1, 1, 1 , 1)

function dalinti(x,y){
  var ats = x/y;
  console.log("padalinus x/y gauname " + ats);
  document.querySelector("body").innerHTML += "atsakymas " +  ats + "<br>";

}
dalinti(200,2);

function dauginti(x,y,z){
  var ats = x*y*z;
  console.log("sudauginus x*y*z gauname " +ats);
  document.querySelector("body").innerHTML += "atsakymas " +  ats + "<br>";

}
dauginti(200,2,300);

function suma(q,w,e,r){
  var ats = q+w+e+r;
  console.log("sudejus skaicius gauname " +ats);
  document.querySelector("body").innerHTML += "atsakymas " +  ats + "<br>";

}
suma(200,2,300,200);

function atimtis(q,w,e,r,t){
  var ats = q-w-e-r-t;
  console.log("atemus skaicius gauname " +ats);
  document.querySelector("body").innerHTML += "atsakymas " +  ats + "<br>";

}
atimtis(200,2,300,200,100);

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


//=====================RETURN==================

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja
function getVardas(){
  var vardas = "Tomas";
  document.querySelector("body").innerHTML += "vardas " +  vardas + "<br>";
  return vardas;

}
console.log(getVardas());

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja
function getVardasPavarde(){
  var vardas = "Antanas";
  var pavarde = "Tomauskas";
  document.querySelector("body").innerHTML += (vardas+" "+ pavarde) + "<br>";
  return vardas +" " + pavarde;
}
console.log(getVardasPavarde());


// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja
function getPelnas() {
  var pajamos = 12500;
  var islaidos = 7500;
  document.querySelector("body").innerHTML += "pelnas " + (pajamos-islaidos)  + "<br>";
  return pajamos-islaidos;
}
console.log(getPelnas());

// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas22(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja
function getPelnas22(pajamos, islaidos){
  var pelnas = pajamos - islaidos;
    document.querySelector("body").innerHTML += "pelnas " + pelnas  + "<br>";
  return pelnas;
}
console.log(getPelnas22(5000,4000));


// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.
function getPazymiuVidurkis2(x1,x2,x3,x4,x5){
  var pazymiuVidurkis3 = (x1+x2+x3+x4+x5)/5;
  return pazymiuVidurkis3;
}
console.log(getPazymiuVidurkis2(7,8,10,2,6));

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

var aukstis = document.querySelector('h1').style.height = "200px";
function getH1ElementoAukstis(){

var aukstis2 = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
document.querySelector("body").innerHTML += aukstis2  + "<br>";
return aukstis2;
}
console.log(getH1ElementoAukstis());

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
