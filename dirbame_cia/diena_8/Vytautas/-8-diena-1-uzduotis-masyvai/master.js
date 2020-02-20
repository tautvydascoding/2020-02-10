console.log(" as veikiu");

// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


// UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"

let prekiautojai = []

// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...

let prekiautojai1 = ["senukai", "rimi", "maxima", "ermitazas"];

// 1.3 isvesti i console/ekrana "prekiautojai" masyva


// 2 pervadinti pirmo stalciaus turini pridedant teksta pvz + "ir KO"

prekiautojai1[0] += "ir KO";

let t = prekiautojai1[1];
prekiautojai1[1] = prekiautojai1[2];
prekiautojai1[2] = t;

document.querySelector('body').innerHTML += prekiautojai1;


// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.


// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

function sukeistiMasyvo2elementus(x, y){
    let temp = prekiautojai1[x];
    prekiautojai1[x] = prekiautojai1[y];
    prekiautojai1[x] = temp;
}
sukeistiMasyvo2elementus(0, 3);
document.querySelector('body').innerHTML += prekiautojai1(0, 3);
// var prekiautojai = []; // empty array
