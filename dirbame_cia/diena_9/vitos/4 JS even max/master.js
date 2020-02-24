console.log(" as veikiu");

// apsilimui

var masyvas = [3, 16, 8, 6, 4, 0, 9, 24, 11];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"

// for (var i = 0; i < masyvas.length; i++) {
//     if (masyvas[i] > 0 && masyvas[i] % 2 == 0) {
//         console.log("nelyginis" + "  " + masyvas[i]);
//     } else if (masyvas[i] == 0) {
//         console.log("tikriausiai 0" + "   " + masyvas[i]);
//     } else {
//         console.log("nelyginis" + "  " + masyvas[i]);
//     }
// }


//papildomas uzdavinys - ar skaicius dalus is 8
for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] > 0 && masyvas[i] % 8 == 0) {
        console.log("dalus is 8" + "  " + masyvas[i]);
    } else if (masyvas[i] == 0) {
        console.log("tikriausiai 0" + "   " + masyvas[i]);
    } else {
        console.log("nedalus is 8" + "  " + masyvas[i]);
    }
}

// ir parodyti tik dalius
for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] > 0 && masyvas[i] % 8 == 0) {
        document.querySelector('body').innerHTML += "dalus is 8" + "  " + masyvas[i];
    }
}


// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60

var burtuSkaicius = Math.random(); // sukuria skaiciu nuo 0 iki 0.999999
console.log("burtuSkaicius: " + burtuSkaicius);
// 0 iki 99,9999
console.log("burtuSkaicius: " + burtuSkaicius*100);
// nuo 1 iki 100
console.log("burtuSkaicius: " + Math.ceil(burtuSkaicius*100));
// nuo 50 iki 200
// Math.random() * (max -min) + min
console.log("burtuSkaicius: " + Math.ceil(burtuSkaicius*100));



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
// surasti geriausia darbuotoja (didziausia skaiciu)

var masyvas2 = [3, 16, 8, 6, 77, 0, 9, 24, 11, 99];
var best = masyvas2[0];

for (var i = 0; i < masyvas2.length; i++) {
    if (masyvas2[i] > best ) {
        best = masyvas2 [i];
    }
}
console.log("geriausias: " + best);

/// blogiausias, arba min reiksme
// papildomai patikrinti, ar > 0

var masyvas2 = [3, 16, 8, -555, 77, 0, 9, 24, 11, 99];
var worst = masyvas2[0];

for (var i = 0; i < masyvas2.length; i++) {
    if (masyvas2[i] < worst ) {
        best = masyvas2 [i];
    }
}
console.log("blogiausias: " + worst);



// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
