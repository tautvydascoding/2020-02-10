console.log(" as veikiu");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "jonas";
let pavarde = "jonaitis";
let amzius = 27;
let atlyg = 700;

console.log(vardas, pavarde);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );

console.log(typeof (vardas));
console.log(typeof (amzius));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius);
}
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis(){
    console.log("met atl:", atlyg * 12);
}
printMetinisPajamuDydis();


//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "vytauto 33";
let postKodas = "45678";

function printAddressData(){
console.log(adresas, postKodas, miestas, salis);
}
printAddressData();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

let x = "vaiku istorijos";

function printTekstas(x){
    console.log(x);
}
printTekstas(x);
x = "mokyklines istorijos";
printTekstas(x);

// arba

// function printTekstas(x){
//     console.log(x);
// }
// printTekstas("Jokubo istorijos");
// printTekstas("Luko istorijos");
// printTekstas("Martyno istorijos");


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

let a = 3;
let b = 4;

function pitagoroTeorema (a,b){
    console.log(Math.sqrt(a*a + b*b));
}
pitagoroTeorema(a,b);
a=6;
b=8;
pitagoroTeorema(a,b);

// arba
//
//
// function pitagoroTeorema (a,b){
//     console.log(Math.sqrt(a*a + b*b));
// }
// pitagoroTeorema(9,12);
// pitagoroTeorema(6,8);



//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
