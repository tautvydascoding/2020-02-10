console.log(" as veikiu");


console.log(" ======== skaicius, kurie yra lyginiai i pakeisti i zodi 'lyginis' ==========");
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"

var masyvas = [-3, 17, 100, 20, 13, -1];
var min = 10;
var max = 100;


for (let i = 0; i < masyvas.length; i++) {
    if (masyvas[i] % 2 == 0 && masyvas[i] != 0) {
        console.log("lyginis " + masyvas[i]);
    } else if (masyvas[i] == 0) {
        console.log("nei lyginis, nei nelyginis " + masyvas[i]);
    } else {
        console.log("nelyginis " + masyvas[i]);
    }
}


console.log(" ======== arba ==========");

for (let i = 0; i < masyvas.length; i++) {
    if (masyvas[i] == 0) {
        console.log("nei lyginis, nei nelyginis  " + masyvas[i]);
    } else if (masyvas[i] % 2 == 0) {
        console.log("lyginis " + masyvas[i]);
    } else {
        console.log("nelyginis " + masyvas[i]);
    }
}


console.log(" ======== jei dalus is 8 isvesti is dock kad radau ==========");

var masyvas2 = [2, 8, 100, 8, 13, 8, 0, 0, 0, 16];

for (let i = 0; i < masyvas2.length; i++) {
    if (masyvas2[i] == 0) {
        console.log("nei lyginis, nei nelyginis - 0 - :   " + masyvas2[i]);
    } else if (masyvas2[i] % 8 == 0) {
        console.log("Dalinasi is 8: " + masyvas2[i]);
        document.querySelector("body").innerHTML += "Dalinasi is 8:   " + masyvas2[i] + "<br>";
    } else {
        console.log("nesidalina is 8:  " + masyvas2[i]);
    }
}

console.log("arba taip trumpiau !!!!!  ");

for (let i = 0; i < masyvas2.length; i++) {
    if (masyvas2[i] % 8 == 0 && masyvas2[i] != 0) {
        document.querySelector("body").innerHTML += "Dalinasi is 8:   " + masyvas2[i] + "<br>";
        console.log("Dalinasi is 8: " + masyvas2[i]);
    }
}



// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60


var burtuSkaicius = Math.random();

console.log("Burtu skaicius: ", burtuSkaicius); // sukuria skaiciu nuo 0 iki 0.9999999999999
console.log("Burtu skaicius: ", burtuSkaicius * 100); // sukuria skaiciu nuo 0 iki 99.9999999999999
console.log("Burtu skaicius: ", Math.ceil(burtuSkaicius * 100)); // apvalina. nuo 0 iki 100
console.log("Burtu skaicius: ", Math.ceil(burtuSkaicius * 100 + 50)); // apvalina. nuo 50 iki 150
// ceil - apvalina i didesne puse
// floor - apvalina i mazesne puse

// nuo 10 iki 100
console.log("Burtu skaicius: ", Math.ceil((burtuSkaicius * 100) + 10));
// apvalina. nuo 10 iki 100



// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)


// 4 UZDUOTIS:
// surasti geriausia darbuotoja

console.log("Geriausio ieskojimas");


masyvas2 = [2, 8, 10, 120, 13, 2100, 8, 13, 0, -9999990];

var best = masyvas2[0]; // laikinai pat geriausias

for (let i = 0; i < masyvas2.length; i++) {
    if (masyvas2[i] > best && masyvas2[i] > 0) {
        var best = masyvas2[i];
    }
}
console.log("geriausias: ", best); // atspausdinti tik po ciklo, nes tada tik geriausia atspausdins o ne visus





// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
console.log("Blogiausio ieskojimas");

masyvas2 = [2, 8, 10, 120, 13, 21, 8, 13, 1, 16, -999];

var worst = masyvas2[0]; // laikinai pat geriausias

for (let i = 0; i < masyvas2.length; i++) {
    if (masyvas2[i] < worst && masyvas2[i] > 0) {
        var worst = masyvas2[i];
    }
}
console.log("Blogiausias: ", worst);