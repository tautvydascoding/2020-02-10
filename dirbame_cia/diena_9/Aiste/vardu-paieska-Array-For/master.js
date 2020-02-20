console.log("labas");
// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }


// bus teste
// ================= taisyklingas Array copy  =================

//         var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']

//         var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai


//         var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy

//         var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ==========================================

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];





// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

console.log(" 1 A uzduotis -----------------------------------");

var x = names.indexOf('Rico');
console.log('number' + x);


// !!! surasti pirmaji !!!

for (var i = 0; i < names.length; i++) { // names.legnth - grazinau masyvo ilgi
    if (names[i] == "Rico") { // i = 0, 1, 2, 3, 4 .....iki length
        console.log("Radau si zmogu. Viena karta. Jo stalciaus nr " + i);
        break; // nutraukia cikla
    }
}

// // !!! surasti visus riko !!!

for (var i = 0; i < names.length; i++) { // names.legnth - grazinau masyvo ilgi
    if (names[i] == "Rico") { // i = 0, 1, 2, 3, 4 .....iki length
        console.log("VISI .Radau si zmogu. Jo stalciaus nr " + i);
        //     break; nereikia, nes visus reikia surasti
    }
}




// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

console.log(" 1 B uzduotis -----------------------------------");

var arRadau = 0; // -false- !!! neradau ----  cia boulien. reikia ziureti reiksme 
var vardas = "Rico";

for (var i = 0; i < names.length; i++) {
    if (names[i] == vardas) {
        // arRadau == false
        // arRadau != true
        // !arRadau
        arRadau = 1;
        console.log("Radau. Jo stalcius " + i);
        console.log(names[i].concat(lastNames[i]) + i);


    } else {
        console.log("nera tokio vardo");
    }
}


if (arRadau === 0) { // neradau
    console.log("NEPAVYKO RASTI");
}



console.log(" 2 uzduotis -----------------------------------");

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)


function getStalciausNumeris(ieskomasTekstas) {
    for (var i = 0; i < names.length; i++) {
        if (names[i] == ieskomasTekstas) {
            return i; // return nutraukia funkcijos darba
        }
    }
    return -9999;
}
console.log(getStalciausNumeris("Carmelo"));

console.log(getStalciausNumeris("zose"));

console.log(names.indexOf("Rico"));






// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

console.log(" 3 gauti varda ir pavarde -----------------------------------");

vardas = "Freida";

for (let i = 0; i < names.length; i++) {
    if (names[i] == vardas) {
        var pavarde = lastNames[i];
        console.log(i + " " + vardas + " " + pavarde);
    }
}

for (i = 0; i < names.length; i++) {
    if (names[i] == vardas) {
        console.log("3 uzduotis Radau si zmogu. Viena karta. Jo stalciaus nr " + i);
        break; // nutraukia cikla
    }
}


console.log(" Skaicius -----------------------------------");

var skaicius = 18;

for (var i = 0; i < ieskomiZmones.length; i++) {
    if (ieskomiZmones[i] == skaicius) {
        console.log(" 1) radau skaiciu 18: " + i);
        break;
    }

}

for (var i = 0; i < ieskomiZmones.length; i++) {
    if (ieskomiZmones[i] == 18) {
        console.log(" radau skaiciu 18: " + i);
    }
}




// 4) rasti visu zmoniu vardu "Rico" pavardes
// B) isvesti ju pavardes ir vardus
console.log(" Rico -------- pavardes radimas ===== -----------------------------------");


for (let i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        var pavarde = lastNames[i];
        console.log(i + " " + names[i] + " " + pavarde);
    }
}

console.log(" 7 kaip is vieno rasti kita info ------ pavarde masyve esancio  zmogaus vardu 'Freida' (pirmojo) -----------------------------------");

// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

vardas = "Piper";

for (let i = 0; i < names.length; i++) {
    if (names[i] == vardas) {
        var pavarde = lastNames[i];
        console.log("vardas pavarde " + names[i] + " " + pavarde + " " + i);
        break;
    }
}


console.log(" 8 --- ieskomiZmones = [2, 16, 17, 18, 19, 25] -----------------------------------");

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus



console.log("!!!!!!!!!!!!!!!!!! SVARBUS PARTIMAS ");



ieskomiZmones = [2, 16, 17, 18, 19, 25];

for (let i = 0; i < ieskomiZmones.length; i++) {
    x = ieskomiZmones [i];

    console.log( "numeris" + x);
    
    console.log( " zmogus" + " " + names[x] + " " + lastNames[x]);
}



