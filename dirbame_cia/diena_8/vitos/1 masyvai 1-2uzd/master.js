console.log(" as veikiu");

var masyvas = []; // tuscias

var masyvas2 = ['Saulius', 23, 'buhalteris']; // su duomenimis

console.log( masyvas2  );

// masyvas2[1]++; // geresnis būdas

// stengtis nenaudoti skaiciu
masyvas2[1] = 27;  // prastesnis būdas

console.log(  masyvas2  );  //nenaudoti viso masyvo

// console.log( masyvas2 [1]  );


document.querySelector('body').innerHTML += "tekstas" + "</br>";


// UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"

var prekybininkai = [];
console.log( prekybininkai );
document.querySelector('body').innerHTML += prekybininkai + "</br>";

// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// 1.3 isvesti i console/ekrana "prekiautojai" masyva

var prekybininkai = ["Depo", "mokvezu", "ermitazas", "maxima"];
console.log( prekybininkai );
document.querySelector('body').innerHTML += prekybininkai + "</br>";



// 2 pervadinti pirmo stalciaus turini pridedant teksta pvz + "ir KO"

prekybininkai [1] += " ir KO";
// arba prekybininkai [1] = prekybininkai [1] + " ir KO";
console.log( prekybininkai );
document.querySelector('body').innerHTML += prekybininkai + "</br>";

// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.

let laikinas = prekybininkai [2];
prekybininkai [2] = prekybininkai [3];
prekybininkai[3] = laikinas;
console.log( prekybininkai );
document.querySelector('body').innerHTML += prekybininkai + "</br>";

// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

function pakeisti1 (x,y){
    let abc = prekybininkai[x];
    prekybininkai [x] = prekybininkai [y];
    prekybininkai[y] = abc;
}
pakeisti1 (0,3);
console.log( prekybininkai );
document.querySelector('body').innerHTML += prekybininkai + "</br>";


// ------------ uzduotis 2 array --------
// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis

var masina = ["Audi", 23000, 800];
console.log( masina );
document.querySelector('body').innerHTML += masina + "</br>";


// 2. padidinti kaina: 100

masina[2]++; //padidina vienetu

console.log( masina );
document.querySelector('body').innerHTML += masina + "</br>";

masina[2] += 100; // padidina reikiamu kiekiu

console.log( masina );
document.querySelector('body').innerHTML += masina + "</br>";


// 3. padidinti rida: -50000

masina[1] += -5500; // padidina reikiamu kiekiu

console.log( masina );
document.querySelector('body').innerHTML += masina + "</br>";


// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"

masina[3] = "Petras";
// masina.push("Tomas");

console.log( masina );
document.querySelector('body').innerHTML += masina + "</br>";


// 4.1 atspausdinti visus pakeistus masyvo duomenis

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"


masina[4] = 2008;
// masina.push(2007);

console.log( masina );
document.querySelector('body').innerHTML += masina + "</br>";


// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:

//========================

//
// document.getElementById("demo1").innerHTML = masina [0];
// // document.getElementByClassName("demo2").innerHTML = "savininko vardas:.. " + masina [3];
// document.getElementById("demo2").innerHTML = "savininko vardas: " + masina [3];
// document.getElementById("demo3").innerHTML = "masinos metai: " + masina [4];

//=======================


document.querySelector('body').innerHTML += "<article> Article </article>";

let teksto1 = " <h2> " + "pavadinimas" + masina [0] + " </h2>";
document.querySelector('article').innerHTML += teksto1;

let teksto2 = " <div> "+ "vardas" + masina [3] + " </div>";
document.querySelector('article').innerHTML += teksto2;

let teksto3 = " <span> "+ "kaina" + masina [2] + "rida" + masina [1] + " </span>";
document.querySelector('article').innerHTML += teksto3;

//==========================

// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>
