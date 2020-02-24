console.log(" as veikiu");
// apsilimui

var masyvas = [0, 0 ,0, 3, 16, 8, 0, 8, 12, 1];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] % 2 == 0  &&    masyvas[i] != 0) {
        console.log( masyvas[i]  + " lyginis");
    } else if (masyvas[i] == 0) {
        console.log( masyvas[i]  + " nei lyginis, nei nelyginis");
    } else {
        console.log( masyvas[i]  + " nelyginis");
    }
}
// tikrinam ar dalus is 8
for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] % 8 == 0  &&  masyvas[i] != 0) {
        document.querySelector('body').innerHTML += masyvas[i]  + " dalus is 8<br>";
    }
}




// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
// butu keliu skaiciu generavimas

var butuSkaicius = Math.random(); // sukuria sk. nuo 0 iki 0.999999

console.log("burtu skaicius: ", butuSkaicius);
console.log("burtu skaicius: ", butuSkaicius*100);  // nuo 0 iki 99.9999
// nuo 0 iki 100 (integer sveiki sk.) ceil - apvalina i didesne puse
console.log("burtu skaicius: ", Math.ceil(butuSkaicius*100) );
// nuo 50 iki 200
// Math.random() * (max - min) + min;
console.log("burtu skaicius: ",  Math.ceil(butuSkaicius * 150) + 50 );

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
// surasti geriausia darbuotoja (didziuasi skaiciu)
masyvas = [-20, 20 , -10, 3, 16, 8888, 0, 8, 12, 1];
let best = masyvas[0];  // laikinai issirenkam kad 0-tas bus geirausias

for (var i = 0; i < masyvas.length; i++) {
    if( best < masyvas[i]) {
        best =  masyvas[i];
    }
}
console.log("geirausias darbuotojas: " + best);

// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
let worst = masyvas[0];  // laikinai issirenkam kad 0-tas bus geirausias

for (var i = 0; i < masyvas.length; i++) {
    if( worst > masyvas[i]) {
        worst =  masyvas[i];
    }
}
console.log("prasciausias darbuotojas: " + worst);
