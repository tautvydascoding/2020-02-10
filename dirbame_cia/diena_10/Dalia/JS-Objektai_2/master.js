console.log(" as veikiu");

// OOP - object oriented programing

var vaikas1 = {
    vardas: "Marius",
    pavarde: "Jonaitis",
    kleintokas: "Antrokas"
}
var vaikas2 = {
    vardas: "Petras",
    pavarde: "Jonaitis",
    kleintokas: "Treciokas"
}


var tetis = {

    vardas: "Jonas",
    pavarde: "Jonaitis",
    amzius: 40,
    vaikai: [vaikas1,vaikas2]

}
console.log(tetis);

tetis.vaikai[0].vardas = "Mariukas";
console.log(tetis.vaikai[0].vardas);

document.querySelector("body").innerHTML += "Vaiko vardas :" + vaikas1.vardas;
