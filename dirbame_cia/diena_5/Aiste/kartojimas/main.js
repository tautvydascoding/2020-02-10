console.log("as veikiu");


// -------KINTAMUJU TIPAI-----------------------

var x = 10;  // number (interger -sveikasis)

var y = 9.99; // number (float/ double - su kableliu)

var vardas = "aiste"; //string (tekstas)

var arVedes = true; //boolean true / false  (tiesa, netiesa)

// uzimti pavadinimai - true, false, var, let, function, return,

var mirtiesData; // undifined - sukurtas kintamasis, bet be duomenu

// pirma programuotojai issivardina kintamuosius, o tada programuoja. sukuria tuos, kuriu reikes projekte

var asYraKlaidu = null; // 

console.log(vardas);

vardas = "Lukas";
console.log(vardas);

vardas = "Roku";

// galima keisti kiek nori. svarbu tik kai pirma karta kuri tada rasyti VAR, o kitus kartus tiesiog pvz vardas ir keisti

console.log(vardas);
console.log(vardas);
console.log(vardas);



let pavarde = "Gete";
// LET neleidzia kurti antra karta to paties. o VAR leidzia kurit du kart toki pati kintamaji
// let pavarde = "Jonaitis";  

console.log(pavarde);

let atsakymas = (10 * 5) + 2.5;

console.log("atsakymas: " , atsakymas);

atsakymas = ((((2 + 3)))) // SVARBU tarpus uzdeti tarp veiksmu. bet veiktu ir be ju. deti, nes lengviau paatyti klaidas

atsakymas = Math.sqrt ( 9 ); //saknies traukimas
 
console.log("saknis is 9 yra ", atsakymas);

//  Math turi slaptu veiksmu viduje

atsakymas = Math.PI + 1 ; // pi + 1

console.log( "pi + 1 lygu:", atsakymas);

atsakymas = Math.round (9.99) ; // 9.99 -> 10

console.log("round 9.99 yra:", atsakymas);

//  kablelis turi buti taskes .
// 
// 
//  su formule geriau programuoti, nes galima tada keisti kintamuosius. siuo atveju formule pirmas-antras. o kintamieji 300 ir 50. juos galima keistii ir pagal formule bus viskas apskaiciuoti
let pirmas = 300;
let antras = 50;

atsakymas = pirmas - antras;

console.log('atimtis 100 - 50 lygu:', atsakymas);
// 
// 
// 


