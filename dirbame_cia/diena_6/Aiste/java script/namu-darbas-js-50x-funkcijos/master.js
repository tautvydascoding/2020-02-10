console.log("labas");

// 1 UZDUOTIS
// sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.  
// patikrinti ar veikia f-ja
console.log("1 UZDUOTIS");

function getPavarde() {
    let alga = 500;
    let pavarde = "Pietkus";
    return pavarde;
}
console.log( "pavarde yra:" + " " + getPavarde() );

document.querySelector("body").innerHTML +=  "pavarde yra:" + " " + getPavarde()  + "<br>";



// 2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");
// sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”
document.write(" <h2> <b class='bg-info'> uz lango singa, kad ir kaip keista </b> </h2> "  + "<br>");



// 3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById('manoDiv').offsetHeight;)
var aukstis = document.querySelector('h1').clientHeight;   
        // clientHeight includes the height and vertical padding.
        // var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
        // aukscio nustatymas:
document.querySelector("h1").style.height = "100px"; 		
        // change the height of a <div> element:


// A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// B) su js paimti jo auksti ir atspausdinti
// C) sumazinkite ekrana ir perkraukite puslapi. Ar js isvedamas aukstis pasikeite?



// 4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
// plain js
// https://plainjs.com/javascript/manipulation/

// ========nezinau kaip





// UZDUOTIS =======ismokti f-jas 50x===============
// Aptrasymas) sukurti 30 getVardas ir 30 setVardas(x) f-ju. Jas iskviesti eiles tvarka "maisant" poruojant pvz:
// setVardas1("Antanas");
// getVardas1();
// setVardas2("Juozas");
// getVardas2();
// A) sukurti (gloabalu) kintamaji pvz:
     // var vardas =  "Tomas";
// B) sukurti 20-30 f-ju:  getVardas1(), getVardas2(), getVardas3(), ...getVardas30()
// kurios  turi "return" ir iskvietus f-ja ji  grazina varda ir prideti skaiciu salia  pvz: "Tomas1", Antanas22, Juozas33
// B) sukurti 20-30 f-ju:   setVardas1(name), setVardas2(name), ... setVardas30(name),...
// kurios   turi pakeisti varda ir prideti skaiciu salia
// C) visas f-jas iskviesti
// pvz.:


function setVardas2(name) {
    vardas = name + "1";
}
setVardas2("Rokas");

function getVardas2() {
    return vardas + "1";
}
x =  getVardas2();
console.log( x ); 


// 2 ------------

function setVardas2(name) {
    vardas = name + "2";
}
setVardas2("Antanas"); // sugalvoti vis kita zodi

function getVardas2() {
    return vardas + "2";
}
x =  getVardas2();
console.log( x );  // isveda: antanas22

// 3---------------------

function setVardas3(name) {
    vardas = name + "3";
}
setVardas3("juozas");   // sugalvoti vis kita zodi

function getVardas3(){
    return vardas + "3";
}
x =  getVardas3();
console.log( x );  // isveda: juozas33


// 4-----------------------

function getVardas4 () {
    return vardas + "4";
}

function setVardas4 (name) {
    name = "Domas"
    return name + "4";
}

console.log(setVardas4 (name));


// 5-----------------------


function setVardas2(name) {
    vardas = name + "5";
}
setVardas2("Ajus");

function getVardas2() {
    return vardas + "5";
}
x =  getVardas2();
console.log( x ); 

// 6-----------------------


function setVardas2(name) {
    vardas = name + "6";
}
setVardas2("Rolandas");

function getVardas2() {
    return vardas + "6";
}
x =  getVardas2();
console.log( x ); 



// 7-----------------------

function setVardas2(name) {
    vardas = name + "7";
}
setVardas2("Adas");

function getVardas2() {
    return vardas + "7";
}
x =  getVardas2();
console.log( x ); 


// 8-----------------------

function setVardas2(name) {
    vardas = name + "8";
}
setVardas2("Aira");

function getVardas2() {
    return vardas + "8";
}
x =  getVardas2();
console.log( x ); 

// 9-----------------------

function setVardas2(name) {
    vardas = name + "9";
}
setVardas2("Lina");

function getVardas2() {
    return vardas + "9";
}
x =  getVardas2();
console.log( x ); 

// 10-----------------------

function setVardas2(name) {
    vardas = name + "10";
}
setVardas2("Gerdas");

function getVardas2() {
    return vardas + "10";
}
x =  getVardas2();
console.log( x ); 

// 11-----------------------

function setVardas2(name) {
    vardas = name + "11";
}
setVardas2("Arnas");

function getVardas2() {
    return vardas + "11";
}
x =  getVardas2();
console.log( x ); 

// 12-----------------------

function setVardas2(name) {
    vardas = name + "12";
}
setVardas2("Giedre");

function getVardas2() {
    return vardas + "12";
}
x =  getVardas2();
console.log( x ); 

// 13-----------------------

function setVardas2(name) {
    vardas = name + "13";
}
setVardas2("Markas");

function getVardas2() {
    return vardas + "13";
}
x =  getVardas2();
console.log( x ); 

// 14-----------------------

function setVardas2(name) {
    vardas = name + "14";
}
setVardas2("Aiste");

function getVardas2() {
    return vardas + "14";
}
x =  getVardas2();
console.log( x ); 

// 15-----------------------

function setVardas2(name) {
    vardas = name + "15";
}
setVardas2("Emilija");

function getVardas2() {
    return vardas + "15";
}
x =  getVardas2();
console.log( x ); 

// 16-----------------------

// function setVardas2(name) {
//     vardas = name + "16";
// }
// setVardas2("Sofija");

function getVardas2(vardas) {
    return vardas + "16";
}
x =  getVardas2( "Sofija");
console.log( x ); 

