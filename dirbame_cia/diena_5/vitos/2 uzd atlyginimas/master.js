console.log(" as veikiu");

// UZDUOTIS
// sukaiciuoti kokia jusu atlyginima i rankas, jeigu:
// atlyginimas ant popieriaus 890
// o mokesciai:
// PSD 9%
// VSD 24% nuo puses atlyginimo
// sukikurti 4-5 kintamuosius
// ir apskaiciuoti atlyginima i rankas


let algaPop = 890;
let psd = 0.09; // proc
let vsd = 0.24; // proc
let puseAlgos = algaPop / 2;
let algaNet;
let mokesciai;

mokesciai = (algaPop * psd) + (puseAlgos * vsd);
algaNet = algaPop - mokesciai;

console.log(algaNet);
