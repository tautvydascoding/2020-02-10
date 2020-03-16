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
let arVedes = true;
    arVedes = false;
let arDuotiPaskola = false;

if (arVedes === true) {
    arDuotiPaskola = true;
}
if (arDuotiPaskola) {
    console.log('paskola bus duodama');
}
// let amzius = "18"; //string
// if( amzius === 18 ) {
//     console.log("nesuveiks, nes amzius yra string, \
//     o '===' tikrina ir tipa ");

// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"


let vardas1 = "Tomas";
let vardas2 = "Antanas";

if(vardas1 == vardas2) {
    console.log("vardai vienodi: " + vardas1 + vardas2 );
} else {
    console.log("vardai skirtingi: " + vardas1 + vardas2 );
}


// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

vardas1 = "Romas";
if (vardas1 == "Tomas") {
    console.log("vardas1 yra Tomas: " + vardas1);
} else {
    console.log("vardas ne Tomas: " + vardas1);
}

vardas3 = "Tomas";
if(vardas3 == "Tomas") {
    console.log("Labas, Tomai ");
// } else {
//     console.log()
}
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia

vardas1 = "Tomas";
vardas2 = "Karolis";
if (vardas1 == "Tomas" && vardas2 === "Karolis") {
    console.log("vardai: yra Tomas ir Karolis " );
} else {
    console.log("vardai ne Tomas ir Karolis : " );
}



// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia

vardas1 = "Tomas";
vardas2 = "Tomas";
if(vardas1 == "Tomas" || vardas2 == 'Tomas') {
    console.log( "Kazkuris turi buti Tomas" );
} else {
    console.log('nei vienas is vardu nera Tomas:' + vardas1 + vardas2 );
}
// 1 UZDUOTIS
// turesime vartotojo amziu
// let age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta


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

let age = 66; // iki 7 metu
if ( age<= 7) {
    console.log("Pliusines varles");
} else if ( age <=14) {
    console.log("Mini telefonai");
} else if (age <= 18) {
    console.log("new Music App");
} else if (age <=23) {
    console.log("Stok i sauliu sajunga");
} else if (age <= 65) {
    console.log("Pensijos kaupimas - uzsiregistruok")
}  else {
    console.log("Kelione i Birstona")
}
// if ()







// 2 UZDUOTIS
// susikurti kintamaji 'klietoVardas' - (ja ivesime betkokia) kurio reiksme lyginsime
// sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))
let klietoVardas = "Jurate";
vardas1= "Tomas";
vardas2 ="Paulius";
vardas3 ="Airidas";
// kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
if (klietoVardas == vardas1) {
	console.log("Masinoms 10% nuolaida");
} else if (klietoVardas == vardas2) {
	console.log("Buitinei technikai  30% nuolaida");
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


var klientas1 = "bronze";
var klientas2 = "silver";
var klientas3 = "gold";
var klientoTipas1 = "bronze";
var klientoTipas2 = "silver";
var klientoTipas3 = "gold";

if (klientoTipas1 == klientas1 ) {
    console.log( "15% nuolaida");
} if ( klientoTipas2 == klientas2 ) {
    console.log( "30% nuolaida");
} if ( klientoTipas3 == klientas3 ); {
    console.log("5% nuolaida");
}



// pasikartoti antradieni
// parasyti f-ja "getPelnas(pajamos, mokesciai, mokesciai2)", kuri apskaiciuoja pelna is  paduotu pajamu atimdama paduotus mokescius, ir poto vel atimdama mokescius2

//
var pajamos = 1500;
var mokesciai = 2.5;
var mokesciai2 = 1.5;

function getPelnas(pajamos, mokesciai, mokesciai2) {
if ("pajamos" * "mokesciai * mokesciai2" );
}
console.log( getPelnas(pajamos, mokesciai, mokesciai2) );
