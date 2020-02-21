console.log(" as veikiu");
console.log("labas");

// =================taisyklingas Array copy  =================
// var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
//taisyklingas copijavimas - deep copy
// var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

let arRadau = false;
for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        arRadau = true;
        //radom Riko
        console.log("iskomo zmogaus numeris yra: " + i);
        break; //nutraukia cikla
    }
}

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
let ieskomasTekstas = "Nepavyko rasti...Bandykite kita zodi";
if (arRadau != true) {
    console.log(ieskomasTekstas);
}

for (var i = 0; i < ieskomiZmones.length; i++) {
    if (ieskomiZmones[i] === 18) {
        console.log("kuris: " + i);
        break;
    }
}

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris(x){
    for (var i = 0; i < lastNames.length; i++) {
        if (lastNames[i] == x) {
            console.log("Kelintas vardas: " + i);
            return i;
        }
    }
    return -9999;
}
let numeris = getStalciausNumeris("Mcdaniel");
let numeris1 = getStalciausNumeris("Tom");
let numeris2 = getStalciausNumeris("Danniel");
let numeris3 = lastNames.indexOf("Toma");
document.querySelector('body').innerHTML += numeris + "<br>";
document.querySelector('body').innerHTML += numeris1 + "<br>";
document.querySelector('body').innerHTML += numeris2 + "<br>";
document.querySelector('body').innerHTML += numeris3 + "<br>";

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

for (var i = 0; i < names.length; i++) {
    if (names[i] == "Freida") {
        console.log("kelintas Freida vardas: " + i);
        kokiaPavarde = lastNames [i];
        break;
    }
}
console.log(kokiaPavarde);

// 4) rasti visu zmoniu vardu "Rico" pavardes

for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        console.log("kelintas Rico vardas: " + i);
        kokiaPavarde1 = lastNames [i];
        console.log(kokiaPavarde1);
    }
}


// A) atspausdinti visus numerius
// 5) //Turime masyva su zmoniu nr.
ieskomiZmones = [2, 16, 17, 18, 19, 25];
for (var i = 0; i < ieskomiZmones.length; i++) {
    console.log("ieskomas: " + ieskomiZmones[i]);
}
// B) isvesti ju pavardes ir vardus
for (var i = 0; i < ieskomiZmones.length; i++) {
    x = ieskomiZmones[i]
    console.log("numeris: " + x);
    console.log("Zmogus x: " + names[x] + lastNames[x]);
}


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
