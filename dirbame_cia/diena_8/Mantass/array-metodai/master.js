console.log(" as veikiu");
// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)----------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

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
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
var x = keliautojas.length;
document.querySelector('body').innerHTML =  x;
console.log("masyvo ilgis: " + x);

console.log(keliautojas.join('@@'));
keliautojas.pop()
console.log(keliautojas.join ('@@'));

keliautojas.push('kirvis');
console.log(keliautojas);

keliautojas [keliautojas.length ] = "antras kirvis"
console.log(keliautojas);

keliautojas.unshift("pompa"); //idedam i masyvo prieki
console.log(keliautojas);

keliautojas.shift();
console.log(keliautojas);

delete keliautojas[2];
console.log(keliautojas);



keliautojas.splice(2, 0, "irklai", "saldainiai")
console.log(keliautojas);

let visiMasyvai = names.concat(keliautojas);
console.log(visiMasyvai);


// 1. i masyvo gala ideti elmenta "butelis vandens"
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
