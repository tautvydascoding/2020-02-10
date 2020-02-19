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
let prekiautojai = [];

// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
prekiautojai = ['senukai', 'maxima','iki', 'akropolis', 'mega']

// 1.3 isvesti i console/ekrana "prekiautojai" masyva
document.querySelector("body").innerHTML += prekiautojai + "<br>";
console.log(prekiautojai);


// 2 pervadinti pirmo stalciaus turini pridedant teksta pvz + "ir KO"
prekiautojai[1] += " ir Ko";

// arba 
//prekiautojai[1] = prekiautojai[1] + " ir Ko";

document.querySelector("body").innerHTML += prekiautojai[1] + "<br>";
document.querySelector("body").innerHTML += prekiautojai[0] + "<br>";
document.querySelector("body").innerHTML += prekiautojai[2] + "<br>";



// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
let t = prekiautojai[0];
prekiautojai[0] = prekiautojai[1];
prekiautojai[1] = t;
// 0 senukai 1 maxima
document.querySelector("body").innerHTML += prekiautojai[0] + " " + "buvo senukai" + "<br>";
document.querySelector("body").innerHTML += prekiautojai[1] + " " + "buvo maxima" + "<br>";



// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

// var prekiautojai = []; // empty array

function sukeistiMasyvo2elementus(x, y) {
	let t = prekiautojai[x];
	prekiautojai[x] = prekiautojai[y];
	prekiautojai[y] = t;
}
// 'senukai', 'maxima','iki', 'akropolis', 'mega'
sukeistiMasyvo2elementus(3, 4);

document.querySelector("body").innerHTML += prekiautojai[3] + " " + "buvo akropolis" + "<br>";

