console.log(" as veikiu");


// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

function printDuomenys( ) {
    var vardas = "Tomas";
    console.log("f-je: " + vardas);
}
printDuomenys();

// console.log("vardas uz f-jos:" + vardas);
// ERROR - vardas kintamas   not defined - neegzistuoja global scope

//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole
// atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gausite klaida ""is not defined""



//================local && global=========
var x = "x -viesas ";   // global
function testLocalVar() {
   var y = "y -vietinis ";  // local
   z = "z -viesas";        // global // nereiketu taip daryti
   console.log("x", x);
   console.log("y", y);
   console.log("z", z);
}
testLocalVar();
console.log("x", x);
console.log("z", z);
// console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"
// console.log("y", window.y);   // error y nera globalus
//------
 // UZDUOTIS // UZDUOTIS
 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos

 var katinas = "juodas";   //global
 //
 function test2() {
     var katinas = "baltas";  // local
    console.log("1 katinas:", katinas);  // baltas
    console.log("2 this.katinas - f-jos viduje: ",  this.katinas);  // juodas   // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
    console.log("2 window.katinas - f-jos viduje: ",  window.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 }
 test2();
 //
 console.log("3 katinas:", katinas); // juodas

//==========================

 var xx = 10; // global

 function isvesti( xx ) {  // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
     console.log( "0. this.xx:",    xx);  //  0
     xx = 20;  // local
     console.log( "1. xx:", xx);   // 20
     console.log( "2. this.xx:",   this.xx);  // 10
 }
 isvesti(0);
 console.log( "3. xx:", xx);  // 10  global


 //======================
 var vardas = "Jonas";   // global - kintamasis
 function myName ( vardas ) { //  vardas - local kintamasis
     console.log( " vardas" + vardas); // PETRAS
     console.log("this.vardas - f-jos viduje: ",  this.vardas); // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 }
 myName("PETRAS");
//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"
function printAntraste(x) {
    document.querySelector('body').innerHTML += x;
}
printAntraste("mano tekstas ekrane");
printAntraste("mano tekstas ekrane2");
//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")
printAntraste("<h2>Antraste1</h2>");
printAntraste("<p>Lorem....1</p>");

printAntraste("<h2>Antraste2</h2>");
printAntraste("<p>Lorem....2</p>");

printAntraste("<h2>Antraste3</h2>");
printAntraste("<p>Lorem....3</p>");

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",


//=======================================
