console.log(" as veikiu");

//objektinis programavimas - OOP - object oriented programing

let mas = [];
mas.push('Inkaras'); // viskas kas rasosi uz tasko iskvieciamos f-jos,
//kurios yra to objekto viduje

//uzduotis:
//1) sukurti objekta vaikas1: vardas, pavarde, kelintokas
//1) sukurti objekta vaikas2: vardas, pavarde, kelintokas

let vaikas1 = {
    vardas: "Andrius",
    pavarde: "Andriauskas",
    kelintokas: "penktokas"
};
let vaikas2 = {
    vardas: "Tomas",
    pavarde: "Tomauskas",
    kelintokas: "sestokas"
};
console.log(vaikas1);
console.log(vaikas2);


//2) sukurti objekta tetis: vardas, pavarde, amzius, vaikas(objektas)

var tetis = {
    vardas: "Petras",
    pavarde: "Petrauskas",
    amzius: 35,
    megstamiausiasVaikas: vaikas1, //kintamasis gali but su - ir ""
    vaikas: [vaikas1, vaikas2],
    vaikas: {vaikas1, vaikas2},

    vaikuSarasas: {
        vardas: "Agne",
        amzius: 11
    }
};
console.log(tetis);

//3) i teti ideti masyva, su vaikais(objektai)

var tetis1 = {
    vardas: "Petras",
    pavarde: "Petrauskas",
    amzius: 35,
    vaikai: [vaikas1, vaikas2],
    vaikaiSarasas: {vaikas1, vaikas2}
};
console.log(tetis1);

//4) pervadinti vaikus

//atkomentuoti po viena
tetis1.vaikai[0].vardas = "Pakeistas masyve";
// tetis1.vaikaiSarasas.vaikas1.vardas = "pakeistas objektu sarase";
console.log(tetis1);
