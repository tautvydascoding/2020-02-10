// console.log(" as veikiu");
// // UZDUOTIS - f-jos return
// failo virusje sukurti kintamuosius:
// valandinisIkainis = 10
// valandos Povilas = 160
// valandos Antanas = 80
// valandos Tomas   = 100
// imones pajamos = 20000
// kitos imones islaidos = 3400
//  UZDUOTIS:
//  1) sukurti  f-ja: getDarbuotojoAtlyginimas(valandos, valIkainis)
//  1.2) paleisti tiek kartu kiek turime darbuotoju
//  2) sukurti  f-ja: getImonesPelnas
//  2.2) isvesti apskaiciuota pelna i console ar ekrana
var valandinisIkainis = 10;
var valandosPovilas = 160;
var valandosAntanas = 80;
var valandosTomas   = 100;
var pajamos = 20000;
var kitosIslaidos = 3400;
var visiAtlyginimai;   // dar nezinome

function getDarbuotojoAtlyginimas(valandos, valIkainis) {
    var alga = valandos * valIkainis;
    return alga;
}
// var PoviloAlga = getDarbuotojoAtlyginimas(valandosPovilas, valandinisIkainis) ;
console.log("Povilas " + getDarbuotojoAtlyginimas(valandosPovilas, valandinisIkainis));
console.log("Antanas " + getDarbuotojoAtlyginimas(valandosAntanas, valandinisIkainis));
console.log("Tomas "   + getDarbuotojoAtlyginimas(valandosTomas, valandinisIkainis));

visiAtlyginimai = getDarbuotojoAtlyginimas(valandosPovilas, valandinisIkainis) + getDarbuotojoAtlyginimas(valandosTomas, valandinisIkainis) +      getDarbuotojoAtlyginimas(valandosAntanas, valandinisIkainis);
console.log("visi atlyg: " + visiAtlyginimai);

function getImonesPelnas(pajamos, islaidos, atlyginimai) {
    var pelnas = pajamos - islaidos - atlyginimai;
    return pelnas;
}
console.log(    getImonesPelnas(200, 20, 100)   );
console.log(    getImonesPelnas(5000, 2500, 1500)   );
console.log(    getImonesPelnas(pajamos, kitosIslaidos, visiAtlyginimai)   );