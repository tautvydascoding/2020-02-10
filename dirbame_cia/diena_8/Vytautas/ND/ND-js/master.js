console.log(" as veikiu");
// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
// ) sunaikinti pirma STALCIU VISA
// ) tarp Petras ir Povilas, iterpti Marija
// ) surikiuoti Masyva
// ) sunaikinti Marijos stalciu
// ) sukeisti vietomis pirma ir paskutini stalciu
// ) sukurti masyvo kojipa
// ) kopijos masyve istrinti nuo 2 iki 4
// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
// ) prijungti kopijos masyva prie orginalo masyvos galo

let masyvas = ['Jonas', 'Petras', 'Povilas', 'Kestas', 'Karolis'];
document.querySelector('body').innerHTML += masyvas + '<br>';

masyvas.shift ('Jonas')
document.querySelector('body').innerHTML += masyvas + '<br>';

masyvas.splice(1, 0, 'Marija');
document.querySelector('body').innerHTML += masyvas + '<br>';

delete masyvas[1];
document.querySelector('body').innerHTML += masyvas + '<br>';

let t = masyvas[4];
masyvas[4] = masyvas[0];
masyvas[0] = t;
document.querySelector('body').innerHTML += masyvas + '<br>';

// 6. sukurti du masyvus (skirtingus)
// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]

// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"


//
