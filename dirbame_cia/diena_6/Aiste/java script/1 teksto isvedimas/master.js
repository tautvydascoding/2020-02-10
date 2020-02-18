console.log("as veikiu");

// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================


//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write(" teketsa  su js ");
document.write(" <p> <b class='bg-info'> Mano tekstas </b> <br> </p> ");

// window.alert("labas");

// alert("Viso");

// let ivestasTekstas = prompt("Ivestkite savo varda");

// console.log(ivestasTekstas);

document.querySelector(' neegzistuojantis elementas');




console.log( document.querySelector('#logo') );
        // -------------- console rasys - null - nes elementas #logo neegzistuoja ----------------


document.querySelector("h1").innerHTML = " <b>Labas</b>" + "<br>";
        // kai tik = tada istrina tekstas buvusi ir ideda nauja


document.querySelector("h1").innerHTML += "naujas tekstas";
        // kai =+ tada tekstas pridedamas prie buvusio


//----Elemento duomenys--------
// auksto paemimas:

var aukstis = document.querySelector('h1').clientHeight;   
        // clientHeight includes the height and vertical padding.
        // var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
        // aukscio nustatymas:


document.querySelector("h1").style.height = "100px"; 		
        // change the height of a <div> element:


document.querySelector("h1").style.backgroundColor = "grey";  
        // jungiama pvz backgroundColor didziaja raide


document.querySelector("h1").classList.add ("bg-info");  
        // class pridejimas ---laimi ir pries style. nes raso !important
 


//=====================PASIKARTOJIMAS==================



//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

console.log("1.1 UZDUOTIS")

function printKaina(x) {
    console.log("kaina: "  + x);
    //sunkesnis budas
    document.querySelector('body').innerHTML +=    x + "<br>";
}

printKaina(15.99);
printKaina(999);
printKaina(105.00);



//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);
console.log("1.2 UZDUOTIS")
function printKainas(x) {
    console.log("kaina" + x);

    // sunkesnis b8udas
    document.querySelector("body").innerHTML += x + " <br>";

}

printKaina(15.99);
printKaina(999);
printKaina(105.00);


// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
console.log("2.1 UZDUOTIS")

function pazymiuVidurkis() {
    let x = 5;
    let y = 10;
    let z = 8;
    let s = 6;
    let b = 8;

    let ats = ( x + y + z + s + b ) / 5;

    console.log (ats);
    document.querySelector("body").innerHTML += "pazymiuVidurkis" + " "  + ats +  " <br>";

}

pazymiuVidurkis ();




// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduo_ti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
console.log("2.2 UZDUOTIS")

function pazymiuVidurkis1 (x1, x2, x3, x4, x5) {

    let ats = ( x1 + x2 + x3 + x4 + x5) / 5;
    console.log (ats);
    document.querySelector("body").innerHTML += "pazymiuVidurkis1" + " "  + ats +  " <br>";
}

pazymiuVidurkis1(5, 10 , 8 , 6 , 8);


// 3 UZDUOTIS
console.log("3 UZDUOTIS")

function daugyba (a, b, c) {

    let ats = a * b * c;
    console.log (ats);
    document.querySelector("body").innerHTML += "daugyba" + " "  + ats +  " <br>";
}

daugyba (-2, -2, -2);

// 4 UZDUOTIS
console.log("4 UZDUOTIS")

function sudetis (a, b, c, d) {

    let ats = a + b + c + d;
    console.log (ats);
    document.querySelector("body").innerHTML += "sudetis" + " "  + ats +  " <br>";
}

sudetis (-2 , 2, -2, 2);

// 5 UZDUOTIS
console.log("5 UZDUOTIS")

function atimtis (a, b, c, d, e) {

    let ats = a - b - c - d - e;
    console.log (ats);

    document.querySelector("body").innerHTML += "atimtis" + " " + ats +  " <br>";
}

atimtis (-1, -1, -1, -1, -1);