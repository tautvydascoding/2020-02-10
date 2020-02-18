console.log("as veikiu");

// =================  IF TEORIJA  ====================
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

//=============  IF  UZDAVINIAI   ====================
// UZDUOTIS
// sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// su console.log pranesti ar paskola zmogui bus duodama
// let arVedes = true;
// let arDuotiPaskola = false;


//========================================================================================================

// let amziu = "18"; //string
// if (amzius === 18) { //number
// 	console.log("nesuveiks, nes amzius yra sting, \ 
// 	o tiktina '===' tikrina ir tipa");

// 	//  '\' leidzia java script programuoti kitoje eiluteje 	
// }

//========================================================================================================


let arVedes = true; 
let arDuotiPaskola = true;

if (arVedes === true) { 
	arDuotiPaskola = true;
} 
if  (arDuotiPaskola) {
	console.log("paskola bus duodama");
}



// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"


let vardas1 = "Tomas";
let vardas2 = "Antanas";

vardas1 = "Karolis";
vardas2 = "Karolis";
vardas2 = "Antanas";
vardas1 = "Tomas";

if ( vardas1 == vardas2 ) {
	console.log("A - vardai sutampa" + " " + vardas1 + " " + vardas2);
	document.querySelector("body").innerHTML += "A - vardai sutampa" + " " + vardas1 + " " + vardas2 + "<br>"; 
} else {
	console.log("A - nevienoti" + " " + vardas1 + " " + vardas2);
	document.querySelector("body").innerHTML += "A - nevienodi" + " " + vardas1 + " " + vardas2 + "<br>"; 

}



// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

vardas1 = "Tomas";

vardas1 = "karolis";

if ( vardas1 == "Tomas" ) {
	console.log( "B - Labas " + " " + vardas1);
	document.querySelector("body").innerHTML +=  "B - Labas " + " " + vardas1 + "<br>"; 

} else {
	console.log( "B - Vardas nerastas");
	document.querySelector("body").innerHTML +=  "B - Vardas nerastas" + "<br>"; 

}



// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// pranesti kad vardai: "Tomas ir Karolis"
// arba pranesti, kad : "vardai NE Tomas ir Karolis"
// pakeitineti vardus ir paziureti ar veikia

vardas1 = "Tomas";
vardas2 = "Karolis";

vardas1 = "Rokas";

vardas1 = "Tomas";


if ( vardas1 == "Tomas" && vardas2 == "Karolis" ) {
	console.log( "C - vardai yra: " + " " + vardas1 + " " + vardas2);
	document.querySelector("body").innerHTML +=  "C - vardai yra: " + " " + vardas1 + " " + vardas2 + "<br>"; 

} else {
	console.log( "C - vardai NE Tomas ir Karolis");	
	document.querySelector("body").innerHTML += "C - vardai NE Tomas ir Karolis" + "<br>"; 

}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
// pranesti: "kazkuris is vardu yra Tomas"
// pakeitineti vardus ir paziureti ar veikia

vardas1 = "Tomas";
vardas2 = "Karolis";
vardas3 = "Laurynas";

vardas1 = "Marius"; 


if ( vardas1 === "Tomas" &&  vardas2 === "Karolis" && vardas3 === "Laurynas" ) {
	console.log( "D - kazkuris is vardu yra Tomas");
	document.querySelector("body").innerHTML += "D - kazkuris is vardu yra Tomas"
} else {
	console.log( "D - nei veinas is vardu nera Tomas");
	document.querySelector("body").innerHTML += "D - nei veinas is vardu nera Tomas" + "<br>"; 
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

let age = 24;

age = 6;

age = 30;

age = 45;

age = 55;

age = 10;



if ( age <= 7 ||  age > 65 ) {
	console.log("Pliusines varles");
	document.querySelector("body").innerHTML += "Pliusines varles" + "<br>"; 
	if ( age <= 7 || age > 65)	{
		console.log("Sokoladiniai zuikuciai 20% nuolaida");
		document.querySelector("body").innerHTML += "Sokoladiniai zuikuciai 20% nuolaida" + "<br>";
	}
} else if ( age > 8 && age < 14  ) {
	console.log("Mini telefonai");
	document.querySelector("body").innerHTML += "Mini telefonai" + "<br>";
} else if ( age > 15 && age < 18) {
	console.log("new Music App");
	document.querySelector("body").innerHTML += "new Music App" + "<br>";
} else if ( age > 19 && age < 24) {
	console.log("Stok i sauliu sajunga");
	document.querySelector("body").innerHTML += "Stok i sauliu sajunga" + "<br>";
} else if ( age > 25 && age < 65) {
	console.log("Pensijos kaupimas - zusiregistruok");
	document.querySelector("body").innerHTML += "Pensijos kaupimas - zusiregistruok" + "<br>";
} else { 
	console.log("kelione i Bristona");
	document.querySelector("body").innerHTML += "kelione i Bristona" + "<br>";
}



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

// }  

// kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

let klietoVardas = "Jurate";

vardas1= "Tomas";
vardas2 ="Paulius";
vardas3 ="Airidas";
vardas2 ="Jurate";
vardas2 = "Karolis";

klietoVardas = "Karolis";


	if (klietoVardas == vardas1) {
		console.log("Masinoms 10% nuolaida");
		document.querySelector("body").innerHTML += "Masinoms 10% nuolaida" + "<br>";
	} else if (klietoVardas == vardas2) {
		console.log("Buitinei technikai  30% nuolaida");
		document.querySelector("body").innerHTML += "Buitinei technikai  30% nuolaida" + "<br>";
	} else {
		console.log("5% nuolaida kelionems");
		document.querySelector("body").innerHTML += "5% nuolaida kelionems" + "<br>";
	}  

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime

// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//

	let klientas1 = "bronze";
	let klientas2 = "silver";
	let klientas3 = "gold";
	let klietoTipas = "bronze";
	klietoTipas = "gold";
	klietoTipas = "silver";

	if ( klietoTipas == klientas1) {
		console.log("bronze 15% nuolaida");
		document.querySelector("body").innerHTML += "klinto tipas - bronze 15% nuolaida" + "<br>";
	} else if (klietoTipas == klientas2) {
		console.log("silver 30% nuolaida");
		document.querySelector("body").innerHTML += "klinto tipas - silver 30% nuolaida" + "<br>";
	} else  {
		console.log("5% nuolaida");
		document.querySelector("body").innerHTML += "kiti klientai - 5% nuolaida" + "<br>";
	}

