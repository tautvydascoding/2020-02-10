console.log(" as veikiu");

// --------GERESNI UZDAVINIAI-------:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

let mas = [];
for (let i = 0; i < 50; i++) {
    console.log("labas");
    mas[i] = 1 ;
}

// console.log(mas); //test

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

let mas2 = [];
let t = 0;
while ( t < 50) {
    mas2[t] = 1;
    t++;    // !!!!!!!! SVARBIAUSIA EILUTE, nes jei neirasysi uzstriks narsykle
    // - t - didinam
}

console.log( "masyvas su while" + mas2);

// =======================================

let arIeskome = true;
while ( arIeskome) {
    console.log("while cikle, bet matysime tik viena karta");
    arIeskome = false;
}




// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....


// let mas = [];   -------- nereikia kurti naujo masyvo  nes jau auksciau yra. todel 1 is auksciau isikelia
for (let i = 1; i < 50; i++) {
    console.log("labas");
    mas[i++] = 3 ;
}

console.log(mas); //test


//  ARBA 
// ziureti  i+=2

// for (let i = 1; i < 50; i+=2) {
//     console.log("labas");
//     mas[i++] = 3 ;
// }
// console.log(mas); //test




// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


for (let i = 4; i < 50; i+=2) {
    console.log("labas");
    mas[i] = 9 ;
}

console.log(mas); //test