// apsilimui

var masyvas = [3, 5, 16 , 8, 0, 8, 12, 1];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"

for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] % 2 == 0 &&  masyvas[i] != 0) {
    console.log( masyvas[i] + " lyginis: ");
} else if (masyvas[i] == 0) {
    console.log( masyvas[i] + " nei lyginis, nei nelyginis" );
} else {
    console.log( masyvas[i] + " nelyginis");
    }
}

for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] % 8 == 0 && masyvas[i] != 0) {
        console.log( masyvas[i] + " lyginis ir dalinasi is : "   )
        document.querySelector('body').innerHTML += masyvas[i] + " lyginis ir dalinasi is : ";
    }
}



// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
// burtu keliu skaiciu generavimas
var burtuSkaicius = Math.random(); // sukuria sk. nuo 0 iki 0.99999
console.log("burtu skaicius: ", burtuSkaicius);
console.log("burtu skaicius: ", burtuSkaicius*100); // nuo 0 iki 100 skaicius
console.log("burtu skaicius: ", Math.ceil(burtuSkaicius*100) ); // Ceil apvalina i didesne suma
// nuo 50 iki 200 return Math.random() * (max - min) + min;
console.log("burtu skaicius: ", Math.ceil(burtuSkaicius * 150) + 50);





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
// surasti geriausia darbuotoja (surasti didziausia skaiciu)

masyvas = [3, 5, 20, 8, 17, 8, 12, 7];
let best = masyvas[0]; //laikinai issirenkam geriausia masyva
for (var i = 0; i < masyvas.length; i++) {
    if ( best < masyvas[i]) {
    best = masyvas[i];
        }
}
console.log("geriausias darbuotojas: " + best);




// 5 UZDUOTIS:
//surasti blogiausia darbuotoja

masyvas = [3, 5, 20, 8, 17, 8, 12, 7];
let worst = masyvas[0]; //laikinai issirenkam geriausia masyva
for (var i = 0; i < masyvas.length; i++) {
    if ( worst > masyvas[i]) {
    best = masyvas[i];
        }
}
console.log("geriausias darbuotojas: " + worst);
