//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "Tomas";
let pavarde = "Tomaitis";
let amzius = 21; // ne kabutese
let atlyginimas = 890; // skaiciai ne kabutese

console.log( vardas , pavarde , amzius , atlyginimas );



// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );

console.log(     typeof(Romas)      );
console.log(     typeof(22)         );



//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log( vardas, pavarde, amzius, atlyginimas );
}
printVardasPavardeAmzius();
printVardasPavardeAmzius();
printVardasPavardeAmzius();


//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")


function printMetinisPajamuDydis() {
    let atsakymas = atlyginimas* 12;
    console.log( "metinis atlyginimas", atsakymas );
}
printMetinisPajamuDydis (""); //f-jos iskvietimas

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

let salis = "Lietuva";
let miestas = "Kaunas";
let adresas = "Gatve";
let pastoKodas = "50500";

function printAddressData() {
    console.log( salis, miestas, adresas, pastoKodas );
}
printAddressData ();



// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");


function printTekstas(x) {
    console.log( "x", "y", "z" );

printTekstas( "Jokubo istorijos");
printTekstas( "Jono istorijos");
printTekstas( "Luko istorijos");


}



// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
