console.log("2.1 uzduotis - vardas pavarde");

// ==========================================================================================================================================================================
// ==========================================================================================================================================================================

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = 'Aiste';
let pavarde = 'Aistaite';
let amzius = 26;
let atlyginimas = 890;

console.log(vardas, pavarde);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );


console.log(typeof (vardas));
console.log(typeof (pavarde));
console.log(typeof(amzius));


// ==========================================================================================================================================================================
// ==========================================================================================================================================================================

console.log("2.2 uzduotis - printVardasPavardeAmzius");

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius);
}

printVardasPavardeAmzius ();
printVardasPavardeAmzius ();
amzius = 27;
printVardasPavardeAmzius ();


// ==========================================================================================================================================================================
// ==========================================================================================================================================================================


console.log("2.3 uzduotis - atlyginimas * 12");

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")


function printMetinisPajamuDydis() {
    console.log(atlyginimas * 12);
}

printMetinisPajamuDydis();
printMetinisPajamuDydis();
atlyginimas = 1200;
printMetinisPajamuDydis();


// ==========================================================================================================================================================================
// ==========================================================================================================================================================================


console.log("2.4 uzduotis - printAddressData");

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = 'Lietuva', // kableliu atskirti ir tada galima kelis surasyti is eiles
    miestas = 'Kaunas',
    adresas = 'Vytauto pr. 24',
    postKodas = '44355';

function printAddressData() {
    console.log(salis, miestas, adresas, postKodas); 
}

printAddressData();
printAddressData();
adresas = 'savanoriu pr. 100';
printAddressData();


// ==========================================================================================================================================================================
// ==========================================================================================================================================================================



console.log("2.5 uzduotis - printTekstas(x)");

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");


function printTekstas(x) {
    console.log(x);
}

printTekstas('Jokubo istorijos');
printTekstas('poihgf oiuytd oiuygfd');


// ==========================================================================================================================================================================
// ==========================================================================================================================================================================


console.log("2.7 uzduotis - pitagoroTeorema(x, y)");

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos


function pitagoroTeorema(x, y) {
    let ats = Math.sqrt (x*x + y*y)
    console.log (ats);
}

pitagoroTeorema(4, 2);


// ==========================================================================================================================================================================
// ==========================================================================================================================================================================



console.log("2.8 uzduotis - pazVidurkis(x, y, z)");

function pazVidurkis (x, y, z,) {
    let ats = ( x + y + z) / 3;
    console.log(ats);
}

pazVidurkis (1, 2, 3,);
pazVidurkis (5, 2, 3,);


// ==========================================================================================================================================================================
// ==========================================================================================================================================================================



console.log("2.9 uzduotis - suma");

function suma (x1, x2) {
    let ats = ( x1 + x2);
    console.log(ats);
}

suma (1, 2,);
suma (-1, -2,);