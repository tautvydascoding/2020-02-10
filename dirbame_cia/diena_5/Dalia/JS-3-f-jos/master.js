console.log(" as veikiu");
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:



let vardas = ' Jonas ';
let pavarde = ' Jonaitis ';
let amzius = 30;
let atlyginimas = 1000;
console.log(vardas, pavarde);



//teo:
//typeof( k );  //f-ja kuri isveda kintamojo tipa
console.log(typeof(vardas));
console.log(typeof(amzius));

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius() {

    console.log(vardas, pavarde, amzius);
}
printVardasPavardeAmzius();
amzius = 34;
printVardasPavardeAmzius();
printVardasPavardeAmzius();

//  3 UZDUOTIS
function printMetinisPajamuDydis() {
    let atlyginimas12 = atlyginimas * 12;
    console.log(atlyginimas12);
}

printMetinisPajamuDydis();


// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")


//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = 'Lietuva';
let miestas = 'Vilnius';
let adresas = 'Aguonų g. 10';
let pastoKodas = 12345;

function printAddressData() {

    console.log(adresas, miestas, salis, pastoKodas);
}

printAddressData();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");


function printTekstas(x) {
    console.log(x);
}
printTekstas('Jokubo istorijos');




// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

let x = 8;
let y = 6;

function pitagoroTeorema() {

    let zKvadratu = x * x + y * y;
    console.log(zKvadratu);
}
pitagoroTeorema();
