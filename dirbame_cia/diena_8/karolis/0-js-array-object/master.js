console.log(" as veikiu");
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva
  var prekiautojai = ["senukai","norfa","maxima","makas"];
//document.querySelector("body").innerHTML += prekiautojai;
	// 2 pervadinti pirmo stalciaus turini pridedant teksta pvz + "ir KO"
  prekiautojai[1] = prekiautojai[1] +  " ir KO";
  //document.querySelector("body").innerHTML += prekiautojai;
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
  // var antras = prekiautojai[2];
  // prekiautojai[2] = prekiautojai[3];
  // prekiautojai[3] = antras;
  //document.querySelector("body").innerHTML += prekiautojai;


	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
  function keitimas(x,y){
    var antras = prekiautojai[1];
    prekiautojai[1] = prekiautojai[3];
    prekiautojai[3] = antras;
    var keturi = prekiautojai[0];
    prekiautojai[0] = prekiautojai[2];
    prekiautojai[2] = keturi;
  }
  keitimas(0,2,1,3);
  document.querySelector("body").innerHTML += prekiautojai;

//	var prekiautojai = []; // empty array

//sukurimas 1 budas
// var masyvas = []; //tuscias masyvas
// //sukurimas 2 budas
// var masyvas2 = ["goda", 21 ,"staklininke"];
//
// //pakeisim godos amziu
// masyvas2[1]++;   //geresnis budas
// masyvas2[1] = 22;  //prastestnis budas(stengtis nenaudoti skaiciu)
//
// console.log(masyvas2); //viso masyvo isvedimas
// // masyvas2 = "antanas"; //viena dazniausiu klaidu
// var tekstas = masyvas2[0] + " " + masyvas2[2];
// document.querySelector('body').innerHTML += tekstas;
