console.log(" as veikiu");



// var zmogus = {
//     vardas : "Tomas",
//     amzius : 17,
//     ugis : 165,
//     eiti : function (greitis) {console.log("einu " + greitis);},
//     vaikai : ["Ana", "Ema"]
// };
//
// console.log( zmogus );
// console.log( zmogus.vardas );
// console.log( zmogus.eiti(5));
// console.log( zmogus.vaikai);
// console.log( zmogus.vaikai[1]);


// ================
// 1 uzduotis -


var vaikas1 = {
    vardas : "Linas",
    pavarde : "Tomaitis",
    amzius : 11,
    kelintokas : 6,
};
// console.log(vaikas1);
//
var vaikas2 = {
    vardas : "Jonas",
    pavarde : "Tomaitis",
    amzius : 17,
    kelintokas : 11,
};
// console.log(vaikas2);

var tetis = {
    vardas : "Tomas",
    pavarde : "Tomaitis",
    amzius : 47,
    ugis : 165,
    vaikas : vaikas1,
    vaikaiMasyve : [vaikas1, vaikas2],
    vaikaiObjekte : {vaikas1, vaikas2}
};
// console.log(tetis);

// =============================
// 1a uzduotis pervardinti

// var tetis = {
//     vardas : "Tomas",
//     pavarde : "Tomaitis",
//     amzius : 47,
//     ugis : 165,
//    };
// console.log(tetis);
//
// tetis.vardas="Justas";

// ========================================
// 1b uzduotis pervardinti

// tetis.vaikas.vardas="pakeitimas";
tetis.vaikaiMasyve[1].pavarde="pakeitimas1";
// tetis.vaikaiObjekte.vaikas1.vardas = "pakeitimas2";

console.log(tetis);
