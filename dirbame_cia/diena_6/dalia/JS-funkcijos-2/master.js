console.log(" as veikiu");
// UZDUOTIS - f-jos return
// failo virusje sukurti kintamuosius:
let valandinisIkainis = 10;
let valandosPovilas = 160;
let valandosAntanas = 80;
let valandosTomas   = 100;
let Pajamos = 20000;
let kitosIslaidos = 3400;
let visiAtlyginimai;

function getDarbuotojoAtlyginimas (valandos, ikainis){
    let alga = valandos * valandinisIkainis;

    return alga;
}
console.log("Povilas " + getDarbuotojoAtlyginimas(valandosPovilas,valandinisIkainis ));
console.log("Tomas " + getDarbuotojoAtlyginimas(valandosTomas,valandinisIkainis ));
console.log("Antanas " + getDarbuotojoAtlyginimas(valandosAntanas,valandinisIkainis ));

visiAtlyginimai = getDarbuotojoAtlyginimas (valandosPovilas, valandosTomas, valandosAntanas) + getDarbuotojoAtlyginimas ()

//  UZDUOTIS:
//  1) sukurti  f-ja: getDarbuotojoAtlyginimas
//  1.2) paleisti tiek kartu kiek turime darbuotoju
//  2) sukurti  f-ja: getImonesPelnas
//  2.2) isvesti apskaiciuota pelna i console ar ekrana
