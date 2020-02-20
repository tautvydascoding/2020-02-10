    console.log("labas");

    ieskomiZmones = [2, 16, 17, 18, 19, 25];

    var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

    var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


console.log(" == 1 == surasti vardu masyve, kelintas zmogus yra 'Rico'")
    // 1A) surasti vardu masyve, kelintas zmogus yra "Rico"

    //surasti pirmaji
    for (let i = 0; i < names.length; i++) {
        if (names[i] == "Rico") {
            console.log("Rico pirmaji varda " + i);
            break;
        }
    }


    //surasti visus Riko vardus
    for (let i = 0; i < names.length; i++) {
        if (names[i] == "Rico") {
            console.log("Rico visi vardai " + i);
        }
    }

console.log(" == 1 B == jeigu tokio vardo neranda, isvesti VIENĄ pranesima 'Nepavyko rasti...Bandykite kita zodi")

    let arRadau = 0;
    let vardas = "Labas";
    for (let i = 0; i < names.length; i++) {
        if (names[i] == vardas) {
            arRadau = 1;
            console.log("Radau. Jo stalcius " + i);
        } 
    }

    if (arRadau === 0) { // neradau
        console.log("NEPAVYKO RASTI");
    }



console.log(" == 2 == funkcija, ieskom stalciaus")
    // parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina

    function getStalciausNumeris(ieskomasTekstas) {

        for (let i = 0; i < ieskomasTekstas.length; i++) {
            if (names[i] == ieskomasTekstas) {
                return i;
            }
        } return -9999;
    }
    console.log(getStalciausNumeris("Carmelo"));
    console.log(getStalciausNumeris("Labas"));



console.log(" == 3 == rasti PAVARDE masyve esancio  zmogaus vardu 'Freida' (pirmojo)")

    vardas = "Freida";

    for (let i = 0; i < names.length; i++) {
        if (names[i] == vardas) {
            let pavarde = lastNames[i]
            console.log("Freida " + vardas + " " + pavarde + " " + i);
        }
    }


console.log(" == 4 == rasti visu zmoniu vardu 'Rico' pavardes")

    vardas = "Rico";

    for (let i = 0; i < names.length; i++) {
        if (names[i] == vardas) {
            let pavarde = lastNames[i]
            console.log("Rico " + vardas + " " + pavarde + " " + i);
        }
    }



console.log(" == 5 == Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];")
    // A) atspausdinti visus numerius
    // B) isvesti ju pavardes ir vardus


    ieskomiZmones = [2, 16, 17, 18, 19, 25];

    for ( let i = 0; i < ieskomiZmones.length; i++ ){
        z = ieskomiZmones [i];

        console.log(" tik numeris eiles: " + z);

        console.log( " zmogus: " + names[z] + " " + lastNames[z]);
        
        
    }



    // var a = Math.random(); // 0 - 1
    // if ( a <= 0.1) {
    //     console.log("laimejai");
    // }
