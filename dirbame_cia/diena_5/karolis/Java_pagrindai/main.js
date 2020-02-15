console.log("bandymas");

// UZDUOTIS
// sukaiciuoti kokia jusu atlyginima i rankas, jeigu:
// atlyginimas ant popieriaus 890
// o mokesciai:
// PSD 9%
// VSD 24% nuo puses atlyginimo
// sukikurti 4-5 kintamuosius
// ir apskaiciuoti atlyginima i rankas

let alga = 890;
let psd = 0.09 //procentai
let vsd = 0.24; //procentai
let atsakymas;
let mokesciai;

mokesciai = (alga * psd) + (alga / 2) * vsd;
atsakymas = alga - mokesciai;
console.log("atlyginimas i rankas", atsakymas);


//komentaras
//
//ilgas
//komentaras
//kintamuju tipai:
var x = 10; //number (int) - sveikas skaicius
var y = 99.99; //number (float) double - su kableliu
var vardas = "rokas"; //string (tekstas)
var arVardas = true; //boolean (tiesa;netiesa)
//uzimti pavadinimai: true, false, var, let, function, return,
var mirtiesData; //undifined - sikurtas kintamasis, bet be duomenu
var arYraKlaidu = null;  //
