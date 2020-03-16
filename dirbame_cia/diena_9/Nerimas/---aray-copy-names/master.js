console.log(" as veikiu");


// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

let arRadau = false;
for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        arRadau = false;
    // radom Riko;

console.log( "Ieskomojojo zmogaus numeris yra: " + i );
break;  // nutraukia cikla
}
}
if (arRadau == false) {
    console.log("Nepavyko rasti teksto");
}


for (var i = 0; i < names.length; i++) {
    if(ieskomiZmones[i] == 18) {
        console.log("radau 18, stalciuje " + i);
        break;
    }
}


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

let = arRadau;
for (var i = 0; i < names.length; i++) {
    if(ieskomiZmones[i] == 19) {
        arRadau = false; // taip radau
        console.log("radau 19, stalciuje " + i );
    }
}
if ( !arRadau ) {
    console.log('neradome skaiciaus, bandyk kita....');
}


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris(ieskomasTekstas){
    for (var i = 0; i < names.length; i++) {
        if (names[i] == ieskomasTekstas) {
        return i; // nutraukia FOR ir function {
}
}
return -9999;
}
console.log("Ieskom Tom : " + getStalciausNumeris( 'Tom') );
console.log("Ieskom Rico : " + getStalciausNumeris( 'Rico') );
console.log("Ieskom Lauros : " + getStalciausNumeris( 'Laura') );

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

for (var i = 0; i < names.length; i++) {
    if (names[i] == "Freida") {
        console.log( "Ieskau zmogaus: " + i );
        // break;  // nutraukia cikla
}
}

let zmogausNumeris = getStalciausNumeris( 'Freida');
let pavarde = lastNames[zmogausNumeris];
console.log("Freidos pavarde: " + pavarde);
// ARBA

for (var i = 0; i < names.length; i++) {
    if (names[i] == "Freida" ) {
        ieskomoNumeris = i;
        console.log("Freidos pavarde: " + lastNames[i]);
    }
}

for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico" ) {
        console.log("Rico pavarde: " + lastNames );
    }
}

var x = 0;
for (var i = 0; i < ieskomiZmones.length; i++) {
    x = ieskomiZmones[i];
    console.log( "numeris: " + x);
    console.log( "Zmogus: " + names[x] + lastNames[x] );
    console.log( "numeris: " + x);
}


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
