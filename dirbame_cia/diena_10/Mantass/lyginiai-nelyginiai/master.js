console.log(" as veikiu");

// apsilimui

var masyvas = [0, 0, 16, 24, 3, 5, 8, 8, 8, 12, 1];
var min = 10;
var max = 100;

for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] % 2 == 0 && masyvas[i] !=0) {
        console.log( masyvas[i] + "lyginis");
    } else if (masyvas[i] == 0) {
    console.log(masyvas[i] + " nei lyginis, nei nelyginis");
} else {
    console.log( masyvas[i] + " nelyginis");
}
}

for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] % 8 == 0 && masyvas[i] !=0) {
        console.log("Dalinasi is 8");
        document.querySelector("body").innerHTML += masyvas[i] + " dalus is 8 <br>"
    }
}
// 0 U}ZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"


// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }
var masyvas = [-4, -5, -99, 1000, 0, 0, 16, 24, 3, 5, 8, 8, 8, 12, 1];
let best = masyvas[0];
for (var i = 0; i < masyvas.length; i++) {
    if (best > masyvas[i] && masyvas[i]>0);
    best = masyvas [i];
}
console.log("geriausias darbuotojas: " + best);
// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
