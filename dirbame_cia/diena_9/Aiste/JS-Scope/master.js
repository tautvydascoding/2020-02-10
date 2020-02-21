console.log("veikiu");

// ==================== Scope ====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

function printDuomenys() {
    var vardas = "Rokas";
    console.log(vardas + " f-joje");
}
printDuomenys();

// console.log(vardas + " vardas uz f-jos"); // ERROR - vardas kintamas not defined - neegzistuoja GLOBAL SCOPE







//================ LOCAL && GLOBAL =========

var x = "x -viesas ";

function testLocalVar() {
   var y = "y -vietinis ";
   z = "z -viesas";
   console.log("x", x);
   console.log("y", y);
   console.log("z", z);
}

console.log("Bandysim isoreje atspausdinti");

testLocalVar();
console.log("x", x);   // atsausdins nes GLOBAL
console.log("z", z);  // atspausdins nes funkcijoje sukurem ji GLOBAL
// console.log("y", y);  // ismes klaida, nes sukurtas viduje su zodeliu var arba let
// console.log("y", window.y);  // ERROR nes y nera GLOBAL



//====================================================
 // UZDUOTIS


 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos

 var katinas = "juodas"; // GLOBAL
 
 function test2() {
    var katinas = "baltas"; // LOCAL
    console.log("1 katinas - local:", katinas);
    console.log("2 this.katinas - f-jos viduje: ",  this.katinas); // 
    console.log("2 window.katinas - f-jos viduje: ",  window.katinas); // 

 }
 test2();
 
 console.log("3 katinas:", katinas); // atspausdins GLOBAL, nes nesam funkcijoje

//==========================

 var xx = 10;
 
 function isvesti( xx ) {
    console.log( "0. xx: 0", xx); // atspausdins --- 0
     xx = 20; // LOCAL
     console.log( "1. xx: 20", xx); //20
     console.log( "2. this.xx: 10",   this.xx);  //10
     // this islipa is funkcijos TIK viena karta. todel jei yra kitos funkcijos tada pamatytu kita funkcijos kintamaji
    //   window islipa max. iki pacio virsaus
 }
 isvesti( 0 )

 console.log( "3. xx: 20 - klaida -  bus 10", xx); // 10 nes vienintele GLOBAL reiksme


 //============================================

 var vardas = "Jonas";
 function myName ( vardas ) {
     console.log( " vardas - petras " + vardas); // petras , nes bute kintamuju nera, o issaukiant fja yra petras
     console.log("this.vardas - f-jos viduje:  jonas - ",  this.vardas);    // jonas
 }
 myName("PETRAS");
 console.log( " jonas vardas" + vardas); // jonas



//====================== TEKSTO ISVEDIMAS ===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

function printAntraste(x) {
    document.querySelector("body").innerHTML +=  x + "<br>";

}
printAntraste("<h2>BMW pinga, nes daugeja</h2>");

//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")





//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

printAntraste("<h3>Vasaros vis salteja</h3>");
printAntraste("<p>Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. </p>");

printAntraste("<h3>Vasaros vis salteja</h3>");
printAntraste("<p>Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. </p>");

printAntraste("<h3>Vasaros vis salteja</h3>");
printAntraste("<p>Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. Greik pageres orai. </p>");

//=======================================
