console.log(" as veikiu");

// UZDUOTIS
// sukaiciuoti kokia jusu atlyginima i rankas, jeigu:
// atlyginimas ant popieriaus 890
// o mokesciai:
// PSD 9%
// VSD 24% nuo puses atlyginimo
// sukikurti 4-5 kintamuosius
// ir apskaiciuoti atlyginima i rankas
let alga = 890;
let PSD = 0.09;
let VSD = 0.24;
let atsakymas;
let mokesciai;

mokesciai =  (alga * PSD) + (alga / 2) * VSD; 
atsakymas = alga - mokesciai;

console.log("atlyginimas i rankas: ", atsakymas);
//
