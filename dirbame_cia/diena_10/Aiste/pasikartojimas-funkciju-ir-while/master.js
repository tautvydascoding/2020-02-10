console.log(" as veikiu");

var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas"];

console.warn("console blogai atvaizduoja isskleistus masyvus, bet gerai atvaizduoja skliaustuose []");


// =====sukurti masyva 100 elementu ilgio naudojant FOR
let mas = [];

for (let i = 0; i < 100; i++) {
    console.log("100");
    mas[i] = 100;
}

console.log(" masyva 100 elementu ilgio naudojant FOR" + mas); //test

//===== sukurti masyva 100 elementu ilgio naudojant WHILE

let mas2 = [];
let t = 0;
while (t < 100) {
    mas2[t] = 1;
    t++;
}
console.log("masyvas su while 100 elementu " + mas2);


// ————————————pasikartojimas f-ju ir while————————————————————————

// Uzduotis:
// 1A) susikurti funkcija, kuri atspasudina i konsole skaiciu kuri paduodate

function test(x) {
    console.log("skaicius: " + x);

    document.querySelector('body').innerHTML += "skaicius: " + x + "<br>";
}
test(21);


// 1B) Paleisti funkcija 20 kartu

test(22);
test(23);
test(24);
test(25);
test(26);
test(27);
test(28);
test(29);
test(30);
test(31);


// 2) susikurti funkcija, kuri spausdina paduota skaiciu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")

function test1(a) {
    if (test1 == a ) {
        console.log("skaicius: " + a);
    } else {
        console.log("nera skaiciaus " + -1);
    }
}
test1(21);
test1();
test1(14);
test1();


//------------while break-- uzduotis:----------------------------


//  sukurti nauja masyva uzpildyta, atsitiktiniais skaiciais
// //  var nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;
// skaiciai = [];
// console.log(skaiciai.toString());

var nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;
skaiciai = [nuoVienoIkiSimto, nuoVienoIkiSimto, nuoVienoIkiSimto, nuoVienoIkiSimto, nuoVienoIkiSimto,nuoVienoIkiSimto];
console.log(skaiciai.toString());



// ——————————— Object ————————————————
// Uzduotis
// 1:  susiskurti darbuotojo "worker" obj., kuris saugo varda, pavarde, amziu, pagamintu detaliu skaiciu

let worker = {
    vardas: "Linas",
    pavarde: "Pavardenis",
    amzius: 24,
    pagamintuDetaliuSKaicius: 114
}

// 2. sukurti “workers”  masyva. Masyvas, kuriame saugomi objektai. Kiekvienas obj saugo visa informacija apie konkretu darbuotoja:

//    A) paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius ir pagamintu detaliu skaicius - burtu keliu)

//	HINT: // !!!!! var naudojame, kad RAM'e / atmintyje sukurtu nauja kintamaji
// 3. sukurti f-ja, kuri i konsole atspausdiname masyva (pilna objektu)
