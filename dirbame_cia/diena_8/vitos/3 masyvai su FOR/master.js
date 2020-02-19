console.log(" as veikiu");


// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

let mas2 = [];

for (var i = 0; i < 50; i++){
console.log("for1 veikiu");
    mas2[i] = 0;
}
console.log(mas2);


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

let mas3 = [];
var t = 0;
while (t < 50){
    mas3[t] = 1;
    t++; // !!!!!! nepamirsti
}
console.log(mas3);


// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

let mas4 = [];

for (var i = 0; i < 50; i += 2){
    mas4[i] = 3;
}
console.log(mas4);

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


for (var i = 0; i < 50; i += 5){
    mas4[i] = 7;
}
console.log(mas4);


//=============bootstrap---sm-md-lg-xl (30-60m)==========
