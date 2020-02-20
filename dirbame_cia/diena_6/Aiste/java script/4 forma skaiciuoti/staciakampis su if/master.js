console.log("labas");


// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================
//
//
//
//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;




function plotas() {


  //suradimas
  let aukstis = document.querySelector("#aukstis"); // surandame HTML elemnta
  let plotis = document.querySelector("#plotis"); // surandame HTML elemnta
  
  let aukstisA = aukstis.value;
  let plotisP = plotis.value

  //test
  console.log("surastas elmtas: " + " " + aukstis + " " + plotis);

  let plotas = (aukstisA * plotisP);
  //test
  // console.log("paimta reiksme: ", laukoPradineReiksme);

  // ivedimo lauko pakeitimas
  // ivedimoLaukasVardas.value = "  Pakeistas   ";  //querySelector - paieskos/selector komanda (veikia pagal CSS taiyskles pvz: '.class', '#id', )
  //test
  // console.log("po pakeitimo lauko reiksme: ", ivedimoLaukasVardas.value);

  let greeting;
  //----ne ivedimo lauku keitimas -  --------
  if (aukstisA < 0 || plotisP < 0) {
    greeting = "negalima skaiciuoti";
  } else if (aukstisA > 100 || plotisP > 100) {
    greeting = "per dideli skaiciai";
  } else {
    greeting = "plotas yra: " + plotas
  }

  let manoP = document.querySelector('p');
  manoP.innerHTML = "staciakampio plotas: " + greeting; //innerHTML - keicia surasto HTML elemento vidu
}
