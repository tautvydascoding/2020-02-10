console.log(" as veikiu");

// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti
// visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var mas = [];
for (var i = 0; i < 50; i++) {
    console.log("for1 veikiu");
    mas[i] = 0;
}
console.log( mas ); // test

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo)
// ir uzpildyti visa skaiciumi 1;
let mas2 = [];
let t = 0;
while ( t < 50) {
    mas2[t] = 1;
    t++;    // !!!!! didinam 't', nes Ciklas dirbs amzinai - kol kompas uzstrigs
}
console.log("masyvas su while:", mas2);

let arIeskome = true;
while (arIeskome) {
    console.log("while cikle, bet matysim tik viena karta");
    arIeskome = false;
}

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

for (var i = 1; i < 50; i+=2) {
    console.log("for1 veikiu");
    mas2[i] = 3;
}
// arba
// for (var i = 1; i < 50; i++) {
//     console.log("for1 veikiu");
//     mas2[i++] = 3;
// }
console.log( mas2 ); // test

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....





//
