// console.log(" as veikiu");
//
// var masyvas = []; //tuscias masyvas (array)
// //sukurimas 2 budas
// var masyvas2 = ['Goda', 21, 'staklininke'];
//
// console.log (masyvas2);
//
//
// //pakeisim godos amzius
// masyvas2[1]++;    //geresnis budas
// masyvas2[1] = 22; //prastesnis budas (stengtis nenaudoti skaiciu)
// console.log (masyvas2);  //viso masyvo isvedimas
//
// document.querySelector("body").innerHTML += masyvas2[0] + " " + masyvas2[2];


// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

	// 2 pervadinti pirmo stalciaus turini pridedant teksta pvz + "ir KO"
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

	var prekiautojai = ["Senukai", "Depo", "Maxima", "Moki vezi"];

    console.log(prekiautojai); // empty array
    prekiautojai[0] += " ir KO";

    let t=prekiautojai[2];
    prekiautojai[2]=prekiautojai[3];
    prekiautojai[3]=t;

    console.log(prekiautojai);
