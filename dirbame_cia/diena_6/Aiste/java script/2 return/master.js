//=====================RETURN==================

// 1 UZDUOTIS
// A) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// B)   f-joje  sukurti kintamaji "vardas" Tomas
// C) patikrinti ar veikia f-ja

function getVardas() {
    let vardas = "rokas";
    return vardas;
}
console.log( getVardas () + " " + " vardas atspausdinamas");

document.querySelector("body").innerHTML += "vardas yra:" + " "  + getVardas () + "<br>";


// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
    let pavarde = "rokaitis";
    return pavarde;
}

console.log( getVardas() + " " + getVardasPavarde() );

document.querySelector("body").innerHTML += "vardas ir pavarde yra:" + " " + getVardas() + " " + getVardasPavarde() + "<br>";


// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja

// f-jos sukurimas
function getVardasPavarde() {
    let vardas = "tomas";
    let pavarde = "tomaitis";
    let tekstas = vardas + " " + pavarde; // string sulipdome is keliu gabalu
    return tekstas;
}
// alert(   getVardasPavarde() );

// f-jos paleidimas
console.log(    getVardasPavarde()  );
// arba
document.querySelector('body').innerHTML += getVardasPavarde() + "<br>";



// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja


function getPelnas() {
    let pajamos = 12500;
    let islaidos = 7500;
    let pelnas = pajamos - islaidos;
    return pelnas;
}

console.log( "pelnas yra:" + " " + getPelnas() );

document.querySelector("body").innerHTML +=  "pelnas yra:" + " " + getPelnas()  + "<br>";


// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas22(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas22() {
    let pajamos = 12500;
    let islaidos = 7500;

    let pelnas = pajamos - islaidos;
    return pelnas;
}


console.log( "pelnas 2 yra:" + " " + getPelnas22(12500, 7500));

document.querySelector("body").innerHTML +=  "pelnas 2 yra:" + " " + getPelnas22(12500, 7500)   + "<br>";



// 4.1 UZDUOTIS
// parasyti f-ja, kuri skaiciuoja vieno mokinio pazymiu vidurki
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
//  turi "return" zodeli.


function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
    let ats = ( x1 + x2 + x3 + x4 + x5) / 5;
    return ats;
}

console.log( "pazymiu vid:" + " " + getPazymiuVidurkis2(5, 7, 5, 7, 5) );

document.querySelector("body").innerHTML +=  "pazymiu vid:" + " " + getPazymiuVidurkis2(5, 7, 5, 7, 5)   + "<br>";






// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduo_ti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
console.log("2.2 UZDUOTIS")

function pazymiuVidurkis1 (x1, x2, x3, x4, x5) {

    let ats = ( x1 + x2 + x3 + x4 + x5) ;
    // console.log (ats);
    // document.querySelector("body").innerHTML += "pazymiuVidurkis1" + " "  + ats +  " <br>";

    return ats;
}

pazymiuVidurkis1(5, 10 , 8 , 6 , 8);


// 3 UZDUOTIS
console.log("3 UZDUOTIS")

function daugyba (a, b, c) {

    let ats = a * b * c;
    // console.log (ats);
    // document.querySelector("body").innerHTML += "daugyba" + " "  + ats +  " <br>";
    return ats
}

daugyba (-2, -2, -2);

// 4 UZDUOTIS
console.log("4 UZDUOTIS")

function sudetis (a, b, c, d) {

    let ats = a + b + c + d;
    // console.log (ats);
    // document.querySelector("body").innerHTML += "sudetis" + " "  + ats +  " <br>";
    return ats
}

sudetis (-2 , 2, -2, 2);

// 5 UZDUOTIS
console.log("5 UZDUOTIS")

function atimtis (a, b, c, d, e) {

    let ats = a - b - c - d - e;
    // console.log (ats);

    // document.querySelector("body").innerHTML += "atimtis" + " " + ats +  " <br>";

    return ats
}

atimtis (-1, -1, -1, -1, -1);

console.log("return");

let pirkiniuSuma = (pazymiuVidurkis1 (1, 2, 3, 4, 5) + daugyba (1, 2, 3) + sudetis (1, 2, 3, 4) + atimtis (1, 2, 3, 4, 5) ) * 2;

console.log(pirkiniuSuma);


document.querySelector("body").innerHTML += "return - pirkiniu suma" + " "  + pirkiniuSuma +  " <br>";



console.log("kitaip rasymas");

// geriau daryti, nes maziau rasymo ir maziau vetos uzima
// console.log((pazymiuVidurkis1 (1, 2, 3, 4, 5) + daugyba (1, 2, 3) + sudetis (1, 2, 3, 4) + atimtis (1, 2, 3, 4, 5) ) * 2;);

console.log( (pazymiuVidurkis1 (10, 2, 3, 4, 5) + daugyba (10, 2, 3) + sudetis (10, 2, 3, 4) + atimtis (10, 2, 3, 4, 5) ) * 2);




function getVardas () {
    let vardas = "labas";
    return vardas;
    // po returnu niekas daugiau neveikia. nesvarbu ka rasysim
}

console.log(getVardas());

console.log("========dvi funkcijas grazinu");

console.log(getVardas() + " "  + "vakaras");

//  dvi funkcijas grazinu

function getPavarde () {
    let pavarde = "rytas"
    return pavarde;
}
console.log("========dvi funkcijas grazinu");

console.log( getVardas () + " "  + getPavarde () );

document.querySelector("body").innerHTML += "vardas ir pavarde yra:" + " "  + getVardas () + " "  + getPavarde () +  " <br>";

