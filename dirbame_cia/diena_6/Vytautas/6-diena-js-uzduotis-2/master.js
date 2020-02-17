console.log(" as veikiu");
// // UZDUOTIS - f-jos return
// failo virusje sukurti kintamuosius:
 let valandinisIkainis = 10;
 let valandosPovilas = 160;
let valandosAntanas = 80;
let valandosTomas = 100;
let imonesPajamos = 20000;
let kitosImonesIslaidos = 3400;
let visiAtlyginimai;
 UZDUOTIS:
 // 1) sukurti  f-ja: getDarbuotojoAtlyginimas

function getDarbuotojoAtlyginimas(){
    let atlyginimas = valandos * valandinisIkainis;
    return atlyginimas;
}
 // 1.2) paleisti tiek kartu kiek turime darbuotoju

 document.querySelector('body').innerHTML += "Povilas:" + " " + getDarbuotojoAtlyginimas(valandosPovilas, valandinisIkainis) + "<br>";
 document.querySelector('body').innerHTML += "Antanas:" + " " + getDarbuotojoAtlyginimas(valandosAntanas, valandinisIkainis) + "<br>";
 document.querySelector('body').innerHTML += "Tomas:" + " " + getDarbuotojoAtlyginimas(valandosTomas, valandinisIkainis) + "<br>";
visiAtlyginimai = getDarbuotojoAtlyginimas(valandosTomas, valandinisIkainis) + getDarbuotojoAtlyginimas(valandosAntanas, valandinisIkainis) + getDarbuotojoAtlyginimas(valandosTomas, valandinisIkainis);
 // 2) sukurti  f-ja: getImonesPelnas

// function getImonesPelnas () {
//     let pelnas = imonesPajamos - visiAtlyginimai - kitosImonesIslaidos;
//     return pelnas;
// }
//  document.querySelector('body').innerHTML += "Pelnas:" + " " + getImonesPelnas(imonesPajamos, visiAtlyginimai, kitosImonesIslaidos) + "<br>";
//  // 2.2) isvesti apskaiciuota pelna i console ar ekrana
