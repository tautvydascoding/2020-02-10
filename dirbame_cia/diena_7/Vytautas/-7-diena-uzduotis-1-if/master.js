console.log(" as veikiu");
// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }
// if(true) {
// 	console.log("labas")
// }

// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }


// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }

//=============IF====================
// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola,
//jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama
let arVedes = true;
let arDuotiPaskola = false;

if (arVedes === true){
    arDuotiPaskola = true;
}
if (arDuotiPaskola) {
    console.log('paskola bus duodama');
}


// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

let vardas1 = "Tomas"
let vardas2 = "Andrius"
if (vardas1 == vardas2) {
    console.log("vardai vienodi:" + " " + vardas1 + " " + vardas2 );
} else {
    console.log("vardai skirtingi:" + " " + vardas1 + " " + vardas2 );
}

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 == "Tomas") {
    document.querySelector('body').innerHTML = "vardas1 yra Tomas:" + " " + "Hello" + "<br>"
} else {
    document.querySelector('body').innerHTML = "vardas ne Tomas:" + " " + "<br>"
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia

if (vardas1 == "Tomas" && vardas2 == "Karolis"){
    document.querySelector('body').innerHTML = "Tomas ir Karolis" + "<br>"
}else {
    document.querySelector('body').innerHTML = "vardai ne Tomas ir Karolis" + "<br>"
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia

if (vardas1 == "Tomas" || vardas1 == "Karolis"){
    document.querySelector('body').innerHTML = "kazkuris is vardu yra Tomas" + "<br>";
}

// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

let x = 24;

if (x < 7 ) {
        document.querySelector('body').innerHTML = "Pliusines varles" + "<br>";
}else if (x < 14) {
    document.querySelector('body').innerHTML = "Mini telefonai" + "<br>";
}else if (x < 18) {
    document.querySelector('body').innerHTML = "new Music App" + "<br>";
}else if (x < 24) {
    document.querySelector('body').innerHTML = "Stok i sauliu sajunga" + "<br>";
}else if (x < 65) {
    document.querySelector('body').innerHTML = "Pensijos kaupimas - uzsiregistruok" + "<br>";
} else if (x > 65) {
    document.querySelector('body').innerHTML = "kelione i Bristona" + "<br>";
}


// Salygos:

// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"


// 2 UZDUOTIS
// susikurti kintamaji 'klietoVardas' - (ja ivesime betkokia) kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))
// let klietoVardas = "Jurate";
// vardas1= "Tomas";
// vardas2 ="Paulius";
// vardas3 ="Airidas";
// // kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
// if (klietoVardas == vardas1) {
// 	console.log("Masinoms 10% nuolaida");
// } else if (klietoVardas == vardas2) {
// 	console.log("Buitinei technikai  30% nuolaida");
// } else {
// 	console.log("5% nuolaida kelionems");
//
// }

// kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime

// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
