console.log(" as veikiu");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:



let vardas = "Petras";
let pavarde = "Tuminas"
let amzius = 21; //ne kabutese
let atlyginimas = 890;  //ne kabutese

console.log( vardas, pavarde);
// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius);
}
printVardasPavardeAmzius();
printVardasPavardeAmzius();
amzius=22;
printVardasPavardeAmzius();

//funkcijos sukurimas
function printMetinisPajamuDydis () {
    let atsakymas = atlyginimas * 12;
    console.log("metinis atlyginimas:", atsakymas);
}
printMetinisPajamuDydis();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

let salis = "Islandija"
let miestas = "Reikjevikas"
let adresas = "Kaisu 68"
let pastoKodas = "45698"

function printAddressData() {
    console.log(salis, miestas, adresas, pastoKodas);
}
printAddressData();



//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius


// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(x) {
    console.log(x);
}
printTekstas ("Martyno istorijos");
printTekstas ("Germanto istorijos");

function (x,y) {
    console.log(Math(x*x+y*y))
}

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
