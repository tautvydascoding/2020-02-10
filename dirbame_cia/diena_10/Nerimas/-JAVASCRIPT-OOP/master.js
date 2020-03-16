console.log(" as veikiu");
// objektinis programavimas - OOP - object oriented programing

let mas = [];

mas.push('Inkaras'); // uz '.' iskvieciamas f-jos, kurios yra siam objekte

// uzduotis:
// 1. sukurti obj. vaikas1: vardas, pavarde, kelintokas
// 1.1 sukurti obj. vaikas2: vardas, pavarde, kelintokas
// 2. sukurti obj. tetis: vardas, pavarde, amzius, vaikas(objektas)
// 3. i teti ideti masyva, su vaikais(objektai)

var vaikas1 = {

    vardas : "Mantas",
    pavarde: "Povilaitis",
    kelintokas : "penktokas"
}

console.log(vaikas1);

var vaikas2 = {

    vardas : "Tomas",
    pavarde: "Baranauskas",
    kelintokas : "treciokas"
}
console.log(vaikas2);

var tetis = {
    vardas: "Egidijus",
    pavarde: "Varanauskas",
    amzius: 51,
    vaikas: vaikas1
    //vaikai: [vaikas1, vaikas2],
    //vaikaiSarasas: {vaikas}, vaikas},
    // vaikuSarasas2: {
        // pirmas:{
        //vardas: "agne"
        //amzius: 11
    // },
    // antras: {
    //vardas : "justas"
    // amzius: 15

}
console.log(tetis);


tetis.vaikas.vardas = "Adolfas"
console.log(tetis.vaikas);
