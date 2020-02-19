console.log(" as veikiu");

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
var vardas = "Tomas";
// 1
function setVardas1(name) {
   vardas = name + "1";
}
setVardas1("Tomas"); // sugalvoti vis kita zodi

function getVardas1() {
  return vardas + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );     // isveda: Tomas11

// 2 ------------
function setVardas2(name) {
    vardas = name + "2";
}
setVardas2("antanas"); // sugalvoti vis kita zodi

function getVardas2() {
    return vardas + "2";
}
x =  getVardas2();
console.log(  x );  // isveda: antanas22

// 3---------------------
function setVardas3(name) {
    vardas = name + "3";
}
setVardas3("juozas");            // sugalvoti vis kita zodi

function getVardas3(){
    return vardas;
}

x =  getVardas3();
console.log(  x );  // isveda: juozas33

// -----4

function setVardas4(name) {
    vardas = name + "4";
}
setVardas4("petras");

function getVardas4(){
    return vardas + 4;
}
x = getVardas4;
document.querySelector('body').innerHTML += getVardas4(x) + "<br>";
// -------5

function setVardas5(name) {
    vardas = name + 5;
}
setVardas5 ("Andrius")
function getVardas5(){
    return vardas + 5;
}
x = getVardas5;
document.querySelector('body').innerHTML += getVardas5() + "<br>";
