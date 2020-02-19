console.log(" as veikiu");



// -------- --Array / Masyvai  Methods (~2h)----------
names = ["Tomas", "Pietkus", 25, "KTU - inzinerija"];

console.log(names);
// UZDUOTIS; panaudoti masyvu Methods:

// .length
// .join()
// .shift()
// .pop()
// ...
// pvz    names.shift();

// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "matematika"];
var x = keliautojas.length;
document.querySelector('p').innerHTML =  x;
console.log("masyvo ilgis: " + x);

// console.log( keliautojas.join("*"));

keliautojas.pop();
let xc = keliautojas.pop();
console.log(keliautojas.pop());

// console.log( keliautojas); //?

console.log( keliautojas.pop()); //? kuo skiriasi nuo virsuje
// document.querySelector('p').innerHTML =  keliautojas.pop();

// 1. i masyvo gala ideti elmenta "butelis vandens"

keliautojas.push("vandens");
keliautojas.push("inkaras");
keliautojas.push("irklas");
console.log( keliautojas);

keliautojas[keliautojas.length] = "antras irklas"; //i masyvo gala
console.log( keliautojas);

keliautojas.unshift("degtukai");
console.log( keliautojas );

keliautojas.shift();
console.log( keliautojas );

//nuo kelinto; kiek istrinti; ka iterpti

//kaip iterpimas
keliautojas.splice(2,0,"bures", "saldainiai");
console.log( keliautojas );

// kaip trinimas, kiek elementu
keliautojas.splice(2,1);
console.log( keliautojas );

//kaip sukeitimas
keliautojas.splice(2,1,"sumustiniai", "morkos");
console.log( keliautojas );

// let visiMasyvai = names.concat(keliautojas);
console.log(names.concat(keliautojas));

// keliautojas.pop();
console.log(names.pop());

// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
