console.log("array - testuojam ")


// ========js best practice & common mistakes (~2h )

// google:  w3 js best practice

//==========idomesni isvedimai==============

// console.warn("ispejimas");
// console.error("raudonas tekstas");


// ========js best practice & common mistakes (~2h)






// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

	// 2 pervadinti pirmo stalciaus turini pridedant teksta pvz + "ir KO"
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

	// var prekiautojai = []; // empty array



	//  sukurimas 1 budas
var masyvas = []; 						// tuscias masyvas (araay)

	// sukurimas 2 budas
var masyvas2 = ['Goda', 21, 'staklininke']; 
console.log( masyvas2 );    //viso masyvo isvedimas

	//pakeitimai Godos amzius
masyvas2[1]++;       //geresnis budas
// (stenkites nenaudoti isvis skaiciu)
masyvas2[1] = 22;    //blogesnis budas 

console.log( masyvas2 );    //viso masyvo isvedimas
// masyvas2 = "Antanas";    //viena dazniausiu junior klaidu. kai norim ka pakeisti butinai reikia []

document.querySelector("body").innerHTML += masyvas2[2] + " " + masyvas2[0] + "<br>";

document.querySelector("body").innerHTML += masyvas2 +  "<br>";

document.querySelector("body").innerHTML += "Specialybe:" + " " + masyvas2[2] + " , " + "Vardas:" + " " + masyvas2[0] + "<br>";


