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

console.log(    keliautojas.join(' @@') );

keliautojas.pop(); // pasalina paskutini stalcius
console.log(    keliautojas.join(' @@') );

keliautojas.push('kirvis'); // idedame i masyvo gala
keliautojas.push('valti'); // idedame i masyvo gala
keliautojas.push('inkaras'); // idedame i masyvo gala
console.log (   keliautojas );

keliautojas.unshift("pompa"); // idedam i masyvo prieki
console.log (keliautojas );

keliautojas.shift(); // istrina stalciu is priekio
console.log (keliautojas );

// delete keliautojas [2]; // istrina pasirinkta stalciu

// nuo kelinto; kiek istrinti; ka iterpti
// kaip iterpimas
keliautojas.splice(2, 0, 'irklai', 'saldainiai');
console.log (keliautojas );
// kaip trinimas
keliautojas.splice(2, 1, );
console.log (keliautojas );
// kaip sukeisti
keliautojas.splice(2, 0,  'irklai', 'saldainiai');
console.log (keliautojas );

let visiMasyvai = names.concat(keliautojas);
console.log(    keliautojas );

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var mas = [];
for (var i = 0; i < 50; i++) {
    console.log("for1 veikiu");
    mas[i] = 0;
}
console.log(    mas  ); // test

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

let mas2= [];
let t = 0;
while ( t < 50) {
    mas2[t] = 1;
    t++; // !!!!! didinam "t", nes ciklas dirbs amzinai!!!!!!!!!!!!!!!!
}
console.log("masyvas su while: ", mas2);

let arIeskome = true;
while (arIeskome) {
    console.log("while cickle, bet matysim tik viena karta");
    arIeskome = false;
}


// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// var mas = [1];
for (var i = 1; i < 50; i+=2) {
    console.log("for1 veikiu");
    mas[i] = 3;
    // i++;
}
console.log(    mas  ); // test



// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
