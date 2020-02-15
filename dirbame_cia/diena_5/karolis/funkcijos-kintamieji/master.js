console.log(" as veikiu");
//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

let vardas = "Tomas";
let pavarde = "Tomaitis";
let amzius = 21; //skaicius ne kabutese
let atlyginimas = 890;
console.log( vardas, pavarde);
console.log("amzius", amzius,"atlyginimas", atlyginimas);

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
console.log(    typeof(vardas)  );
console.log(    typeof(amzius)  );

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius(){

  console.log(vardas, pavarde, amzius,);
}
printVardasPavardeAmzius();
printVardasPavardeAmzius();
printVardasPavardeAmzius();


//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

//funkcijos sukurimas
function printMetinisPajamuDydis() {
  let atsakymas = atlyginimas * 12;
  console.log(" metinis atlyginimas:", atsakymas);

}
printMetinisPajamuDydis();



//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
let salis = "lietuva";
let miestas = "kaunas";
let adresas = "vytauto pr.";
pastoKodas = 25467;
function printAddressData(){
  console.log(salis, miestas, adresas, pastoKodas);
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
printTekstas("Martyno istorijos");
printTekstas("Jono istorijos");
printTekstas("Luko istorijos");


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y ir is visko istraukti sakti (js Math.sqrt())

function pitagoroTeorema(x) {
  console.log(x);

}
printpitagoroTeorema(sqrt(2*2+4*4));

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos
