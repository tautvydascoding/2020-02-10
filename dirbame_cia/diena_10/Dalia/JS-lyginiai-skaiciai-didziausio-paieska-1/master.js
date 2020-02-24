console.log(" as veikiu");
// apsilimui

var masyvas = [3, 5, 0, 8, 8, 12, 1];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
for (var i = 0; i < masyvas.length; i++) {
    if (masyvas[i] %8 ==0 && masyvas[i] !=0) {
        console.log( masyvas[i] + " dalinasi is 8");
        document.querySelector('body').innerHTML += (masyvas[i] + " dalinasi is 8");
    }else if (masyvas[i] == 0){
        document.querySelector('body').innerHTML += (masyvas[i] + " cia yra nulis ");
    }else{
        console.log( masyvas[i] + " nesidalina is 8");
        document.querySelector('body').innerHTML += (masyvas[i] + " nesidalina is 8");
    }
}

// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60

var burtuSkaicius = Math.random();
console.log("skaicius burtu keliu: " + burtuSkaicius*100) ;
console.log("skaicius burtu keliu: ", Math.ceil (burtuSkaicius*100)) ;

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


// surasti geriausia darbuotoja (didziasias skaicius)

var masyvas = [100, 20, 35, 5, 1, 8, 23, 64,8, 120, 1, 13];
let best = masyvas[0];



for (var i = 0; i < masyvas.length; i++) {
    if (best < masyvas[i]) {
        best = masyvas[i];
    }
}
console.log("geriausias darbuotojas: " + best);

// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
let last = masyvas[0];

for (var i = 0; i < masyvas.length; i++) {
    if (last > masyvas[i]) {
        last = masyvas[i];
    }
}
console.log("blogiausias darbuotojas: " + last);
