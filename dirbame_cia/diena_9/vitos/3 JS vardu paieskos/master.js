// test
console.log("labas");
// alert("issokanti zinute");
document.write("labas ekrane");


// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Freida", "Tenisha", "Rico", "Clementina", "Freida", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)



function getNames (x) {

    // let arRadau = "neradau";
    // let w = "Freida";
    for (var i = 0; i< names.length; i++){

        if (names[i] == x ){
            // arRadau = "radau";
            // console.log("Ieskomas vardu nr: " + i);
            // console.log(names[i].concat(lastNames[i])); //concat geriau nenaudoti
            // break; //nutraukiamas ciklas
            return i + names[i] + lastNames[i];
            // console.log(i);
        }
    }

return null;
    // if (arRadau == "neradau"){
    //     console.log("nepavyko rasti");
    // }
}

console.log("ieskom freida vardas pavarde  " + getNames ("Freida"));
console.log("ieskom indexof freida" + names.indexOf ("Freida"));



// names.indexOf("Rico");

// function vardoIeskoti(x) {
// document.querySelector('body').innerHTML +=  x;
// console.log(x);
//  }
// vardoIeskoti (names.indexOf("Rico"));

// function ieskotiRico() {
//   document.querySelector('body').innerHTML = names.find(ieskotiRico);
// console.log(ieskotiRico);
// }
// ieskotiRico();

// printAntraste("mano tekstas");


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)


skaiciukai = [2, 16, 17, 18, 19, 25, 23, 18, 16, 17, 18, 19, 25];

let arRadauSkaiciu = false;
let xz = 77;
for (var i = 0; i< skaiciukai.length; i++){
    if (skaiciukai [i] === xz ){
        arRadauSkaiciu = true;
        console.log("Ieskomas skaicius nr: " + i);
        // break; //nutraukiamas ciklas
        }
}

if (arRadauSkaiciu == false){
    console.log("nepavyko rasti skaiciaus");
}

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)



// 4) rasti visu zmoniu vardu "Rico" pavardes


// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus



// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
