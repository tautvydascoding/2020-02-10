
// UZDUOTIS
// sukaiciuoti kokia jusu atlyginima i rankas, jeigu:
// atlyginimas ant popieriaus 890
// o mokesciai:
// PSD 9%
// VSD 24% nuo puses atlyginimo
// sukikurti 4-5 kintamuosius
// ir apskaiciuoti atlyginima i rankas


let alga = 890;
let psd = 0.09; // procentai // 0.09
let vsd = 0.24; // procentai // 0.24
let atsakymas;
let mokesciai;

mokesciai = (alga * psd) + (alga / 2) * vsd;
atsakymas = alga - mokesciai;
console.log( "atlyginimas i rankas ", atsakymas);
