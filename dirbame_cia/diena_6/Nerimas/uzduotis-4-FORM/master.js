// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================


// naudojantis uzduoties 3 pavayzdziu isspresti
//============== =========
// UZDUOTIS 1
// sukurti ivedimo lauka, naudojantis pvz 3,
// kur reikes ivesti apskritimo spinduli ,,R".
// Kai paspaudziamas mygtukas - paskaiciuojamas apskritimo plotas: Plotas = pi * R*R
// pi = Math.PI;
//
//
//
//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;

function apskritimoPlotas() {
    var ivedimoLaukas = document.querySelector('#spindulys');
    // console.log( ivedimoLaukas);

// bandom paimti tek
// sta is ivedimo lauko
// let ivestasTekstas = ivedimoLaukas.value;
// // arba
var ivestasTekstas2 = document.querySelector('#spindulys').value;
// console.log("iverstas tekstas:" + ivestasTekstas2); // test
let plotas = Math.PI * ivestasTekstas2 * ivestasTekstas2;
console.log("plotas: " + plotas); // test
}
// document.querySelector('body').innerHTML = apskritimoPlotas ("plotas: " + plotas); ";

var tekstas = "Apskritimo plotas apie " + Math.round(plotas)";
document.querySelector('#rezultatas').innerHTML = tekstas;
