console.log("bandymas");

// senovinis kintamasis
var x = 10; //number (integer - sveikasis)
var y = 9.99; // number (float/double - su kableliu)
var vardas= "Nerimas"; //string tekstas
var arVedes = true; // boolean true, false (netiesa, tiesa)
// uzimti pavadinimai: true, false, var, let, function, return
var mirtiesData; // undifined - sukurts kintamasis, bet be duomenu
var arYraKlaidu = null; //


vardas = "Lukas";
console.log( vardas );
vardas = "Roku";
console.log( vardas);
console.log( vardas);
console.log( vardas);


let pavarde = "Gete";
// Klaida - Let neleidzia sukurti du kart vienodo kintamojo
// let pavarde = "Jonaitis";

let atsakymas = (10 * 5) + 2;
console.log( "atsakymas: " , atsakymas );
atsakymas = ((((2 + 3))));

atsakymas = Math.sqrt( 9 );
console.log( "saknis is 9:" , atsakymas );
atsakymas = Math.PI + 1 ; // 3,1415.... +1
console.log( "pi:  " , atsakymas );
atsakymas = Math.round( 9.99 ) ; // 9.99 -> 10
console.log( "apvalintas skaicius: ", atsakymas);

let pimras = 100;
let antras = 50;
atsakymas = pirmas - antras;
console.log( "atimtis: ", atsakymas);
