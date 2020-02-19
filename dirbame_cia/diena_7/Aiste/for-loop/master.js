console.log("as veikiu");

// JavaScript supports different kinds of loops:

// for - loops through a block of code a number of times
// for/in - loops through the properties of an object
// for/of - loops through the values of an iterable object
// while - loops through a block of code while a specified condition is true
// do/while - also loops through a block of code while a specified condition is true



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

for (i = 0; i < 30; i++) {
    console.log("Azuolas" + " " + i); 
}


// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

let manoBody = document.querySelector("body");

for (i = 0; i < 30; i++) {
    x = "Azuolas" + i;
    manoBody.innerHTML += x + "<br>";
}


// 1.2 UZDUOTIS
// (HTML faile susikurti <article> elementa)
// isvesti 40 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

let article = document.querySelector("article");

for (i = 0; i < 40; i++) {
    x = "<h2> Azuolas</h2>" + i;
    article.innerHTML += x + "<br>";
}


// 1.3 UZDUOTIS
// (HTML faile susikurti <ul> elementa)
// isvesti 6 kartu zodi "<li> elementas 1 </li> " i <ul> elementa su  innerHTML pagalba

let liul = document.querySelector("ul");

for (i = 0; i < 6; i++) {
    x = "<li> elementas 1 </li>" + " " + i;
    liul.innerHTML += x + "<br>";
}

// 1.4 UZDUOTIS
// (HTML faile susikurti <header> elementa)
// isvesti 10 kartu zodi "<p> Aprasymas x </p> " i <header> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 0 iki 9 atsisrandantis automatiskai)

let header = document.querySelector("header");

for (i = 1; i < 10; i++) {
    b = "<p> Aprasymas" + " " + i + " " + "</p>";
    header.innerHTML += b + "<br>";
}

// 1.5 UZDUOTIS
// (HTML faile susikurti <div> elementa)
// isvesti 6 kartu zodi "<li> elementas X </li> " i <div> elementa su  innerHTML pagalba (kur x - yra skaicius "i" nuo 1 iki 6 atsisrandasntis automatiskai)

let div = document.querySelector("div");

for (i = 1; i < 6; i++) {
    a = "<li> elementas" + " " + i + " " + "</li>";
    div.innerHTML += a + "<br>";
}

// 2.0 UZDUOTIS
// sukurti f-ja "print()", kuri  i browser langa atspausdins  teksta "atspausdintas su f-ja" (panaudojanti document.write arba innerHTML)

function print () {

    let ats = "atspausdintas su f-ja" ;
    document.querySelector("body").innerHTML += "atspausdinam 2.0 : " + " "  + ats +  " <br>";
}

print ("kas?")


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

function print (x) {

    let ats = (x) ;
    document.querySelector("body").innerHTML += "atspausdins paduota xx teksta ----" + " "  + ats +  " <br>";
}

print(5);
print ("labas");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

let antram = document.querySelector("body");

function printX (x) {
    antram.innerHTML += x + "<br>";
}

for (i = 0; i < 100; i++) {
    // x = ats + "funcija 100k" + i;
    printX (4);
}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// PATARIMAS:
// pabandyti  isideti nuotrauka i HTML faila, jie pavyks tada nusikopijuoti ir ideti i js faila

// let treciasAntro = document.querySelector("body");
x = '<img src="balionas.png" alt="">';

//  !!!!!!!!!! SVARBU  !!!!!!!!!!!!
// 
// norint ikelti img reikia sukurti nauja kintamaji

function printX (x) {
    antram.innerHTML += "spausdina nuotrauka" + " " + x + "<br>";
}

for (i = 0; i < 12; i++) {
    // x = ats + "funcija 100k" + i;
    printX (x);
}
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
