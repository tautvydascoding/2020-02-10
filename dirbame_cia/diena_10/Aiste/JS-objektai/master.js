console.log(" as veikiu");


// objektinis programavimas - OOP - object oriented programing

// let mas [];

// mas.puch ("Inkaras"); // uz '.' iskvieciamos f-jos, kurios yra objektai


//uzduotis
// 1. sukurti obj. vaikas1: vardas, pavarde, kelintokas 
let vaikas1 = {
    vardas: "Dovydas",
    pavarde: "Pavardenis",
    kelintokas: "5-okas"
}

console.log(vaikas1);

// 2. sukurti obj. vaikas2: vardas, pavarde, kelintokas

let vaikas2 = {
    vardas: "Aiste",
    pavarde: "Pavardinaite",
    kelintokas: "12-oke"
}
console.log(vaikas2);

// 3. suskurti obj. tetis: vardas, pavarde, amzius, vaikas (objektas)
let tetis = {
    vardas: "Rolandas",
    pavarde: "Pavardenis",
    amzius: 51,
    megstamaiusaisVaikas: vaikas1,
    vaikas3: {
            vardas: "Dovydas",
            pavarde: "Pavardenis",
            kelintokas: "5-okas"
        },
    vaikas4: {
            vardas: "Aiste",
            pavarde: "Pavardinaite",
            kelintokas: "12-oke"
        }
    }
console.log(tetis.megstamaiusaisVaikas);

console.log(tetis.vaikas3);

// 4. i teti ideti masyva, su vaikais (objektai)

let tetis2 = {
    vardas: "Rolandas",
    pavarde: "Pavardenis",
    amzius: 51,
    visiVaikai2: [vaikas1, vaikas2]
}
console.log(tetis2.visiVaikai2[1]);


// 5. pervadinti vaikus

tetis.vaikas3.vardas = "Labas";
console.log(tetis.vaikas3);

tetis.vaikas3.pavarde = "Labiauskas";
console.log(tetis.vaikas3);

tetis.vaikas3.kelintokas = "Baige mokykla";
console.log(tetis.vaikas3);

document.querySelector("body").innerHTML += " vaikas1 " + vaikas1.vardas + "<br>";




// 6 pervadinti vaikus masyve

tetis2.visiVaikai2[0].vardas = "Vakaras";
console.log(tetis2.visiVaikai2[0]);

document.querySelector("body").innerHTML += " vaikas1 " + tetis2.vardas;


tetis2.visiVaikai2[1].vardas = "Oras";
console.log(tetis2.visiVaikai2[1]);

tetis2.visiVaikai2[1].pavarde = "Oreo";
console.log(tetis2.visiVaikai2[1]);



