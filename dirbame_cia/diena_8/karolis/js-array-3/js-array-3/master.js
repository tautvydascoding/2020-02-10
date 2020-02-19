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
console.log(" masyvo ilgis: 0" + x);

console.log(keliautojas.join(" @@"));


keliautojas.pop(); //pasalina paskutini skaiciumi
console.log(keliautojas.join(" @@ "));


keliautojas.push(" kirvis"); //idejimas i masyva
console.log(keliautojas.join(" @@ "));


keliautojas[ keliautojas.length] = "antras kirvis"; //taip pat idedam i masyvo gala dar 1 stalciu
console.log(keliautojas.join(" @@ "));


keliautojas.unshift(" pompa"); //idedam i masyvo prieki stalciu
console.log(keliautojas.join(" @@ "));


keliautojas.shift(); //istrina is priekio stalciu
console.log(keliautojas.join(" @@ "));


delete keliautojas[2]; //istrina 2 stalciu, lieka empty
//nuo kelinto; kiek istirnti; ka iterpti
keliautojas.splice(2, 0, "irklai", "saldainiai");


//kaip iterpti 2 - nuo kelinto stalciaus; 0 - kiek istrinti stalciu
keliautojas.splice(2, 1, "sumustiniai");
console.log(keliautojas);


//kaip trinimas  1- istrina viena stalciu
keliautojas.splice(2, 1, );


//kaip sukeisti
keliautojas.splice(2, 1, "morkos")
console.log(keliautojas);


var visiMasyvai = names.concat(keliautojas);
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
