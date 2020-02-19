console.log("as veikiu");


//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 1;  // x = 11
    // x += 1;     // x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

for (i = 0; i < 50; i++) {
    console.log("Azuolas" + " " + i); 
}

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

let article = document.querySelector("article");

for (i = 0; i < 50; i++) {
    t = "<h2> Azuolas </h2>" + i;
    article.innerHTML += t + "<br>";
}
 
// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)" i browser langa (panaudojanti document.write arba innerHTML)

function printX(xx) {

    let ats = (xx) ;
    document.querySelector("body").innerHTML += "atspausdintas tekstas" + " "  + ats +  " <br>";
}

printX(5);
printX ("labas");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu


for (var i = 0; i < 100; i++) {
    printX("100-tas f-ju"); // test
}



// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

t1 = '<img src="balionas.png" alt="">';
t2 = '<img src="5.jpg" alt="">'
t3 = '<img src="6.png" alt="">'
t4 = '<img src="concert.jpg" alt="">'
t5 = '<img src="header.jpg" alt="">'
t6 = '<img src="pencil_sharpener.jpg" alt="">'
t7 = '<img src="retro-jukebox-hire-homepage.png" alt="">'
t8 = '<img src="Screen Shot 2017-11-12 at 9.19.28 PM.png" alt="">'
t9 = '<img src="template.jpg" alt="">'
t10 = '<img src="writing.jpg" alt="">'
t11 = '<img src="1.jpg" alt="">'
t12 = '<img src="2.jpg" alt="">'



// for (i = 0; i < 12; i++) {
//     printX (xx);
// }

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


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
