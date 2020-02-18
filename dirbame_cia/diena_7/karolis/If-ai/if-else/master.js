// console.log(" as veikiu");
// // =================if  teorija====================
// // if ( true ) {
// //     console.log("labas");
// // }
// if(true){
// 	console.log("labas")
// }
//
// // if (salyga) {
// //     // jei true
// //     //
// //     //
// // } else {
// //     // jei false
// // }
//
//
// // if ( salyga ) {
// //     // jei salyga tenkinama
// // }
// //
// // if ( salyga ) {
// //     // jei salyga tenkinama
// // } else {
// //     // jei salyga netenkinama  / priesingu atveju
// // }
// //
// // if (salyga) {
// //
// // } else if (salyga) {
// //
// // } else {
// //     // ?
// // }
//
// //=============IF====================
// // UZDUOTIS
// // sukurti kintamuosius: arVedes ir arDuotiPaskola = false
// // patikrinti ar zmogus vedes. Jeigu "vedes" - duoti paskola, jeigu "nevedes" - neduoti paskolos
// // su console.log pranesti ar paskola zmogui bus duodama
// let arVedes = true;
//     arVedes = true;
// let arDuotiPaskola = false;
// //
// if ( arVedes == true) {
//   console.log("paskola bus duodama");
// }
// let amzius = "18"; //string
// if(amzius===18){
//   console.log("nesuveiks, nes amzius yra string, o === tikrina ir tipa");
// }
// } else {
//     arDuotiPaskola = false;
// }
// console.log("Ar paskola gausite: " + arDuotiPaskola);
// // ----------------------------------
//
// // 0 UZDUOTIS
// // A)
// // susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// // patikrinti:
// // jeigu vardai sutampa, i konsole pranesti apie tai
// // jeigu vardai nesutampa - parasysi "vardai yra skirtingi"
let vardas1 = "Tomas";
let vardas2 = "Antanas";
if (vardas1 == vardas2) {
    console.log(vardas1, vardas2, " - vardai vienodi");
} else {
    console.log(vardas1, vardas2, " - vardai yra skirtingi");
}
// // B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo
if (vardas1 == "Tomas") {
    console.log(vardas1 + " - Labas Tomai");
}
// // C)
// // Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"
// // pranesti kad vardai: "Tomas ir Karolis"
// // arba pranesti, kad : "vardai NE Tomas ir Karolis"
// // pakeitineti vardus ir paziureti ar veikia
// vardas1 = "Tomas";
// vardas2 = "Karolis";
// if (vardas1 == "Tomas" && vardas2 == "Karolis") {
//     console.log(vardas1 , vardas2, " - vardai yra  Tomas ir Karolis ");
// } else {
//     console.log(vardas1 , vardas2, " -!!! vardai NE Tomas ir Karolis ");
// }
// // D)
// // Patikrinti ar bent vienas is vardu "Tomas"
// // || - arba
// // pranesti: "kazkuris is vardu yra Tomas"
// // pakeitineti vardus ir paziureti ar veikia
// vardas1 = "Antanas";
// vardas2 = "Karolis";
// if (vardas1 == "Tomas" || vardas2 == "Tomas") {
//     console.log(vardas1 , vardas2, " - kazkuris vardas yra Tomas ");
// } else {
//     console.log(vardas1 , vardas2, " -!!! NEi vienas is vardu Tomas ");
// }
// // 1 UZDUOTIS
// // turesime vartotojo amziu
// let age = 24;
// // gapal ji, turesiem isvesti tam tikra reklamos teksta
//
// // Salygos:
// if (age < 7) {
//     console.log("Pliusines varles");
// } else if ( age < 14) {
//     console.log("Mini telefonai");
// } else if (age < 18) {
//     console.log("New music app");
// }
// // let m = [];
// // m[ m.length ] = "tekstas gale";
//
// // iki 7 metu
// //      "Pliusines varles"
// // nuo 7 iki 14
// //      "Mini telefonai"
// // nuo 14 iki 18
// //      "new Music App"
// // nuo 18 iki 24
// //      "Stok i sauliu sajunga"
// // nuo 24 iki 65
// //      "Pensijos kaupimas - zusiregistruok"
// // nuo 65
// //      "kelione i Bristona"
// // sunkesne:
// //      (i 'if' vidu ideti papildoma 'if')
// //      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"
//
//
// // 2 UZDUOTIS
// // susikurti kintamaji 'klietoVardas' - (ja ivesime betkokia) kurio reiksme lyginsime
// // sukurti 3  vardas1= "Tomas", vardas2 ="Paulius", vardas3 ="Airidas" (gimianiciu vardai , jie tures akcijas))
      var klientoVardas = "Klientas";
      var tomas = "Tomas";
      var airidas = "Airidas";
      var paulius = "Paulius";
// // kai "if"-ui padauodame klietoVardas ir vardas1 - isvesti "Masinoms 10% nuolaida"
if (klientoVardas=="Tomas") {
  console.log(klientoVardas, tomas + " yra giminaitis todel gauna 10% nuolaida");
}else {
  console.log("Klientes yra negiminaitis, gauna 5% nuolaida kelionems");
}
    if (klientoVardas=="Paulius") {
      console.log(klientoVardas, paulius + " yra giminaitis todel gauna 10% nuolaida");
    }else {
      console.log("Klientes yra negiminaitis, gauna 5% nuolaida kelionems");
    }
        if (klientoVardas=="Airidas") {
          console.log(klientoVardas,airidas + "yra giminaitis todel gauna 10% nuolaida");
        }
          else {
            console.log("Klientes yra negiminaitis, gauna 5% nuolaida kelionems");
}
// // kai "if"-ui padauodame klietoVardas ir vardas2 - isvesti "Buitinei technikai  30% nuolaida"
if (klientoVardas=="Airidas") {
  console.log(klientoVardas,airidas+ " gauna Buitinei technikai 30% nuolaida");
}else {
  console.log("Klientes yra negiminaitis, gauna 5% nuolaida kelionems");

}
// // kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"
//
// // 3 UZDUOTIS
// // sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// // susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
var klientoTipas = "auksas";
var bronze = "bronza";
var silver = "sidabras";
var gold = "auksas";
//
// // kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
if (klientoTipas==bronze) {
  console.log(" kliento tipas yra bronza - gauna 15% nuolaida");
}else if (klientoTipas==silver) {
  console.log(" kliento tipas yra sidabras - gauna 30% nuolaida");
}else if (klientoTipas==gold) {
  console.log(" kliento tipas yra auksas - gauna nuolaida");
}else {
  console.log("klientas gauna tik 5% nuolaida");
}
// // kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// // kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
// //
