console.log("array - testuojam ")

// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
let mas1 = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];
console.log(mas1 + "     ---------     sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis");
document.querySelector("body").innerHTML += mas1 + "     ---------     sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis" + "<br>"

// ) sunaikinti pirma STALCIU VISA 
mas1.shift();
console.log(mas1 + "     ---------     sunaikinti pirma STALCIU VISA ");
document.querySelector("body").innerHTML += mas1 + "     ---------     sunaikinti pirma STALCIU VISA " + "<br>"

// ) tarp Petras ir Povilas, iterpti Marija
mas1.splice(1, 0, "Povilas2", "Marija");
console.log(mas1 + "    ---------     tarp Petras ir Povilas, iterpti Marija");
document.querySelector("body").innerHTML += mas1 + "    ---------     tarp Petras ir Povilas, iterpti Marija" + "<br>"

// ) surikiuoti Masyva

// ) sunaikinti Marijos stalciu
mas1.splice(2, 1);
console.log(mas1 + "  ---------     sunaikinti Marijos stalciu");
document.querySelector("body").innerHTML += mas1 + "  ---------     sunaikinti Marijos stalciu" + "<br>"

// ) sukeisti vietomis pirma ir paskutini stalciu

mas1.splice(0, 1, "Karolis");
mas1.splice(4, 1, "Jonas");
console.log(mas1 + "    ---------    sukeisti vietomis pirma ir paskutini stalciu");
document.querySelector("body").innerHTML += mas1 + "    ---------    sukeisti vietomis pirma ir paskutini stalciu" + "<br>"


// ) sukurti masyvo kojipa

let mas2 = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];
console.log(mas2 + "     ---------     sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis");
document.querySelector("body").innerHTML += mas2 + "     ---------     sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis" + "<br>"


// ) kopijos masyve istrinti nuo 2 iki 4
mas2.splice(2, 4);
console.log(mas2 + "  ---------     kopijos masyve istrinti nuo 2 iki 4");
document.querySelector("body").innerHTML += mas2 + "  ---------     kopijos masyve istrinti nuo 2 iki 4" + "<br>"

// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija

console.log(mas1 + "  ---------     originalas");
document.querySelector("body").innerHTML += mas1 + "  ---------     originalas" + "<br>"

// ) prijungti kopijos masyva prie orginalo masyvos galo

let visiMasyvai = mas1.concat(mas2);

console.log(visiMasyvai);
document.querySelector("body").innerHTML += visiMasyvai + " visiMasyvai" + "<br>"

// 6. sukurti du masyvus (skirtingus)

let masyvas1 = ["aiste", "karolina", "juste", "ausra", "lina"];
let masyvas2 = [15, 14, 13, 12, 11];

// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]


for (let i = 0; i < 20; i++) {
    masyvas1[i] = masyvas2[i++] ;
}
console.log(masyvas1);


// sunkesnis
// susikurti masyva su prekiu pavadinimais
let masyvas3 = ["agurkas", "obuolys", "makaronai", "vanduo", "varske"];
console.log(masyvas3 + " --------------- origin");
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

masyvas3.reverse();
console.log(masyvas3 + " --------------- reverse");


