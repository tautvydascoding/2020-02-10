//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 3;  // x = 13
    // x += 3;     // tas pats kad x = x + 3;
    // x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 30 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

// for (var i = 0; i < 30; i++) {
//     console.log( "Azuolas");
//     document.querySelector('body').innerHTML += "Azuolas ";
// }


// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

// 1.2 UZDUOTIS
// (HTML faile susikurti <article> elementa)
// isvesti 40 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

// // for (var i = 0; i < 40; i++) {
// //     console.log("Azuolas");
// //     document.querySelector('article').innerHTML += "<h2>Azuolas</h2> ";
// }


// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba

// for (var i = 0; i < 6; i++) {
//     console.log("Azuolas");
//     document.querySelector('ul').innerHTML += "Azuolas ";
// }



// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandantis automatiskai)

// for (var i = 0; i < 10; i++) {
//     console.log("<p> Aprasymas" +i +" </p> " +i);
//     document.querySelector('header').innerHTML += " <p> Aprasymas "+i+"</p> " ;
// }



// 1.5 UZDUOTIS
// (HTML faile susikurti <div> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <div> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)

// // for (var i = 0; i < 6; i++) {
// //     console.log("<li> Aprasymas" +i +" </li> " +i);
// //     document.querySelector('div').innerHTML += " <li> Aprasymas "+i+"</li> " ;
// }


// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)

// function print() {
//     console.log( "atspausdintas su f-ja" );
//     document.querySelector('body').innerHTML += "atspausdintas su f-ja " ;
// }
// print();




// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

// function printX(xx) {
//     console.log( "xx" );
//     document.querySelector('body').innerHTML += "xx";
// }
// printX("xx");





// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

// function printX(xx) {
//         console.log(xx);
//         document.querySelector('body').innerHTML += "Antanas ";
// }
//             for (var i = 0; i < 100; i++)
// printX("Antanas");


// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

function printX(xx) {
    document.getElementById("myImg").innerHTML += '<img src="C:/Users/Gajas/OneDrive/Documents/srotas/16388976_1428629263875498_1231404005_o.jpg">';
}
for (var i = 0; i < 12; i++)
printX("myImg");



// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)




// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


function piestiEilute(x) {
    
}




// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======