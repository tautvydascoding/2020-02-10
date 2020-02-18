// UZDUOTIS - f-jos return
// failo virusje sukurti kintamuosius:
// valandinisIkainis = 10
// valandos Povilas = 160
// valandos Antanas = 80
// valandos Tomas   = 100
// imones pajamos = 20000
// kitos imones islaidos = 3400
//  UZDUOTIS:
//  1) sukurti  f-ja: getDarbuotojoAtlyginimas
//  1.2) paleisti tiek kartu kiek turime darbuotoju
//  2) sukurti  f-ja: getImonesPelnas
//  2.2) isvesti apskaiciuota pelna i console ar ekrana



console.log("1) sukurti  f-ja: getDarbuotojoAtlyginimas");

function getDarbuotojoAtlyginimas () {

    let valandinisIkainis = 10;
    let valandosPovilas = 160;
    let valandosAntanas = 80;
    let valandosTomas   = 100;


    let PoviloAtlyginimas = ( valandinisIkainis * valandosPovilas );
    let AntanoAtlyginimas = ( valandinisIkainis * valandosAntanas );
    let TomoAtlyginimas = ( valandinisIkainis * valandosTomas );

    
    console.log ("Povilo atlyginimas" + " "  + PoviloAtlyginimas);
    console.log ("Antano atlyginimas" + " "  + AntanoAtlyginimas);
    console.log ("Tomo atlyginimas" + " "  + TomoAtlyginimas);


    document.querySelector("body").innerHTML += "Povilo atlyginimas" + " "  + PoviloAtlyginimas +  "<br>";
    document.querySelector("body").innerHTML += "Antano atlyginimas" + " "  + AntanoAtlyginimas +  "<br>";
    document.querySelector("body").innerHTML += "Tomo atlyginimas" + " "  + TomoAtlyginimas +  "<br>";


}



getDarbuotojoAtlyginimas();

let valandinisIkainis = 10;
let valandosPovilas = 160;
let valandosAntanas = 80;
let valandosTomas   = 100; 

function getDarbuotojoAtlyginimas (valandos, valandinisIkainis) {

let alga = valandos * valandinisIkainis;
return alga;
}

console.log( " Povilas" + " " + getDarbuotojoAtlyginimas (valandosPovilas, valandinisIkainis));
console.log( " Antanas" + " " + getDarbuotojoAtlyginimas (valandosAntanas, valandinisIkainis));
console.log( " Tomas" + " " + getDarbuotojoAtlyginimas (valandosTomas, valandinisIkainis));


console.log("2) sukurti  f-ja: getImonesPelnas");


function getImonesPelnas () {
    let imonesPajamos = 20000;
    let kitosImonesIslaidos = 3400;
    let imonespelnas = (imonesPajamos - kitosImonesIslaidos);

    return imonespelnas;

    

}

    console.log("imones pelnas" + " " + getImonesPelnas ());

    document.querySelector("body").innerHTML += "2) Imones pelnas yra:" + " " + getImonesPelnas () + "<br>";
