console.log(" as veikiu");

console.log("labas");

// =================taisyklingas Array copy  =================
// var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var kopijaNEGERAI = array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// // taisiklingas copijavimas - deep copy
// var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico"
//  (surasti pirmaji; sunkes- surasti visus riko)
let arRadau = "neradau";
for (var i = 0; i < names.length; i++) {
    if (names[i] == "Rico") {
        arRadau = "radau";
        // radom Riko
        console.log( "Ieskomo zmogaus numeris yra: " +  i   );
        break; // nutraukia cikla
    }
}

if (arRadau == "neradau") {
    console.log("Nepavyko rasti ieskomo teksto...Bnadykit kita");
}

// ieskom masyve skaiciuas '18'
 arRadau = false;
for (var i = 0; i < ieskomiZmones.length; i++) {
    if(ieskomiZmones[i] == 18) {
        arRadau = true; // taip radau
        console.log("radau 18, stalciuje: " + i);
    }
}
if ( !arRadau ) {  // if(arRdau == false)
    console.log("neradome skaiciaus, bandykite kita...");
}
// 1B) papildyti ^: jeigu tokio vardo neranda,
// isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi ,
// ji suranda jo vieta masyve (stalciaus numeri)
// ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
function getStalciausNumeris( ieskomasTekstas) {
    for (var i = 0; i < names.length; i++) {
        if (names[i] == ieskomasTekstas) {
            return i;  // nutraukima FOR ir function
        }
    }
    return -9999;
}
console.log("ieskom TOmo nr: " + getStalciausNumeris( 'Tom')  );
console.log("ieskom Rico nr: " + getStalciausNumeris( 'Rico') );
console.log("ieskom Laura nr: " + getStalciausNumeris( 'Laura') );

console.log("ieskom indexOf nr: " + names.indexOf("Rico")  );
// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
let zmogausNumeris = getStalciausNumeris( 'Freida');
let pavarde = lastNames[zmogausNumeris];
console.log("Freidos pavarde: " + pavarde);
// ARBA
for (var i = 0; i < names.length; i++) {
    if (names[i] == 'Freida') {
        iesmomoNUmeris = i;
         console.log("Freidos pavarde: " + lastNames[iesmomoNUmeris]);
    }
}

// 4) rasti visu zmoniu vardu "Rico" pavardes
for (var i = 0; i < names.length; i++) {
    if (names[i] == 'Rico') {
        iesmomoNUmeris = i;
         console.log("Rico pavarde: " + lastNames[iesmomoNUmeris]);
    }
}
// 5) Turime masyva su zmoniu nr.
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

// A) atspausdinti visus numerius
for (var i = 0; i < ieskomiZmones.length; i++) {
    console.log("ieskomas: " + ieskomiZmones[i]);
}
// B) isvesti ju pavardes ir vardus
var x = 0;
for (var i = 0; i < ieskomiZmones.length; i++) {
    x = ieskomiZmones[i];
    console.log( "numeris:" + x);
    console.log("ZMogus x: " + names[x]  + lastNames[x] );
}



// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
