console.log(" as veikiu");
// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)----------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
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
document.querySelector('body').innerHTML +=  x;


// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.pop ("butelis vandens");
console.log(keliautojas );



keliautojas.push ("kirvis");
keliautojas.push ("saukstas");
keliautojas.push ("valtis");
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift('ziebtuvelis');


// 3. istrinti 3-cia elmenta

delete keliautojas[3];

// keliautojas.splice(2,0,'irklai','saldainiai');//nuo kelinto (o), kiek istrinti(0), kiek ideti (irklai, saldainiai)
keliautojas.splice(2,0,'irklai','saldainiai')
console.log(keliautojas);// iterpimas
keliautojas.splice(2,1); //istrynimas (nuo 2 elemento istrinti viena)
console.log(keliautojas)

keliautojas.splice(2,1, "saumustinis");// nuo 2 viena istrinam, viena idedam (sukeitimas)


// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
