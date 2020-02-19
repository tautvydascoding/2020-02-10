console.log(" as veikiu");
// =================if  teorija====================
// if ( true ) {
//     console.log("labas");
// }
// if(true){
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
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama
let arVedes = false;
let arDuotiPaskola = true;

if (arVedes === true) {
    arDuotiPaskola = true;

}
if (arDuotiPaskola) {

    console.log("paskola bus duodama");
}
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

let vardas1 = "Jonas";
let vardas2 = "Jonas";

if (vardas1 == vardas2){
    console.log("Vardai sutampa");
}
else {
    console.log("Vardai yra skirtingi");
}

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 =="Tomas"){
    console.log("Labas Tomai");
}
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

if (vardas1 =="Tomas" && vardas2 == "Karolis"){
    console.log("Vardai yra: " + vardas1 + " "+ vardas2);
}
else {
    console.log("Vardai yra ne Tomas ir ne Karolis");
}
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia

if (vardas1 == "Tomas" || vardas2 == "Tomas"){
     console.log( "Kažkuris iš vardų yra Tomas");
}
// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia

// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta
let age = 65;

if (age  <= 7 || age >=65){
    console.log("Zuikučiams -20%");
    if (age <= 7){
        console.log("Pliusines varles");
    }
}
if (age > 7 && age <= 14){
    console.log("Mini telefonai");
}
if (age > 14 && age <= 18){
    console.log("New Music App");
}
if (age >18 && age <=24){
    console.log("Stok į šaulių sąjungą");
}
if (age > 24 && age <= 65) {
    console.log("Pensija");
}
if (age > 65) {
    console.log("Kelione");
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
let klietoVardas = "Paulius";
vardas1 = "Tomas";
vardas2 = "Paulius";
vardas3 = "Airidas";
// kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
if (klietoVardas == vardas1) {
    console.log("Masinoms 10% nuolaida");
} else if (klietoVardas == vardas2) {
    console.log("Buitinei technikai  20% nuolaida");
} else {
    console.log("5% nuolaida kelionems");

}


// kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime

// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
let klientoTipas = "gold";
let klientas1 = "bronze";
let klientas2 = "silver";
let klientas3 = "gold";

if (klientoTipas == klientas1){
    console.log("15% nuolaida");
}
else if (klientoTipas == klientas2){
    console.log("30% nuolaida");
}
else {
    console.log("5% nuolaida");
}
