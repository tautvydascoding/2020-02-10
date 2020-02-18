console.log(" as veikiu");
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
function apskritimoPlotas() {
  var ivedimoLaukas = document.querySelector("#spindulys");
//console.log(ivedimoLaukas);    //TEST

//bandom paimti teksta is ivedimo lauko
//var ivestasTekstas = ivedimoLaukas.value;
//arba
//var ivestasTekstas= document.querySelector("#spindulys").value;
var ivestasTekstas2  = document.querySelector("#spindulys").value;
console.log("ivestas tekstas: " + ivestasTekstas2);
  //testas
  var plotas = Math.PI*ivestasTekstas2*ivestasTekstas2;
  console.log("plotas yra lygus " +plotas );
  document.querySelector("body").innerHTML += "plotas yra apie: " + Math.round(plotas) + "<br>";

}
//
//
//
//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;
