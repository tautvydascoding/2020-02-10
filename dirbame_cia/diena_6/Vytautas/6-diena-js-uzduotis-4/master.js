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

function apskritimoPlotas(){
    let ivedimoLaukas = document.querySelector('#spindulys');
    // console.log( ivedimoLaukas ); // test
    // bandom paimti teksta is ivedimo lauko
    let ivestasTekstas = ivedimoLaukas.value;
    // arba
    // let ivestasTekstas = document.querySelector('#spindulys');
    // console.log("ivestas tekstas:" + "ivestasTekstas");
    let plotas = Math.PI * ivestasTekstas * ivestasTekstas;
    // console.log("plotas" + plotas); //test
    document.querySelector('#rezultatas').innerHTML = "Apskritimo plotas:" + " " + Math.round(plotas) + "<br>";
}

//
//
//
//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;
