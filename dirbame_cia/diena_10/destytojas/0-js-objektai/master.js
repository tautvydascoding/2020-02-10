console.log(" as veikiu");

// objektinis porgramavimas - OOP - object oriented programing

let mas = [];

mas.push('Inkaras'); // uz '.' iskvieciamos f-jos, kurios yra siam obj

// uzduotis:
// 1. sukurti obj. vaikas1: vardas, pavarde, kelintokas
// 1. sukurti obj. vaikas2: vardas, pavarde, kelintokas
var vaikas1 = {
        vardas: "ROckas",
        pavarde: "Rokauskas",
        kelintokas: "7b"
};
var vaikas2 = {
        vardas: "Rita",
        pavarde: "Rokauskas",
        kelintokas: "5b"
};
console.log(vaikas1);
console.log(vaikas2);
// 2. sukurti obj. tetis: vardas, pavarde, amzius, vaikas(objektas)
var tetis = {
        vardas: "Romualdas",
        pavarde: "Rokauskas",
        amzius: 44,
        megstamiausiasVaikas:  vaikas1,
        vaikai: [vaikas1, vaikas2],
        vaikaiSarasas: {vaikas1, vaikas2}
};
console.log( tetis );
// 3. i teti ideti masyva, su vaikais(objektai)
// 4. pervadiniti vaikus
vaikas1.vardas = "Adolfas";
console.log(vaikas1);
// 5. pakeiti tecio vaiko varda (kuris yra msyvae ar objekte)
// NOTE: atkomentuoti po viena
tetis.megstamiausiasVaikas.vardas = "pakeistas1";
tetis.vaikai[0].vardas = "pakeistas masyve1";
tetis.vaikaiSarasas.vaikas1.vardas = "pakeistas1 obj sarase";

console.log(tetis);
