//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:

let vardas = "Vytautas";
let pavarde = "Krapikas";
let amzius = 27; //ne kabutese
let atlyginimas = 800; //ne kabutese
console.log(vardas, pavarde);


// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(typeof(vardas));
console.log(typeof(amzius));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius);
}
printVardasPavardeAmzius();
printVardasPavardeAmzius();
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function printMetinisPajamuDydis() {
    console.log(12 * atlyginimas);
}
printMetinisPajamuDydis()

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

// Let salis = "Lietuva",
// miestas = "Kaunas" ir t.t. - galima ir taip rasyt kintamuosius

let salis = "Lietuva"
let miestas = "Kaunas"
let adresas = "Siaures"
let pastoKodas = 21456


function printAddressData() {
    console.log(salis, miestas, adresas, pastoKodas);
}
printAddressData()

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta
// pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x) {
    console.log(x);
}
printTekstas("Martyno istorijos")
printTekstas("Jono istorijos")
printTekstas("Luko istorijos")

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

function pitagoroTeorema(x, y) {
    console.log(Math.sqrt((x * x) + (y * y)));
}

pitagoroTeorema(1, 2);

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos