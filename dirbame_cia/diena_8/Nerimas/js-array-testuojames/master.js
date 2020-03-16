

// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------

//     // sukurimas 1 budas:
//     var masyvas = []; //tuscias masyvas (array)
//     // sukurimas 2 budas:
//     var masyvas2 = ['Goda', 21, 'kirpeja'];
//     console.log( masyvas2 ); // viso masyvo isvedimas
//     // pakeisim Godos amziu
//     masyvas2[1]++;  // geresnis budas
//     masyvas2[1] = 22; // prastesnis budas (stenkites nenaudoti isvis skaiciu)
//     console.log( masyvas2 ); // viso masyvo isvedimas
//     // masyvas2 = "Antanas"; // viena dazniausiu JUnior klaidu
//     let tekstas = masyvas2[0] + " " + masyvas2[2];
// document.querySelector('body').innerHTML += masyvas2[0] +" " + masyvas2[0];



	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

	// 2 pervadinti pirmo stalciaus turini pridedant teksta pvz + "ir KO"
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

	var prekiautojai = ['prekiautojai'];
    console.log( prekiautojai );


    prekiautojai[1] = 'senukai';
    prekiautojai[2] = ' iki';
    prekiautojai[3] = '  maxima';
    console.log(  prekiautojai[1] + prekiautojai[2] );

    prekiautojai [1] += " ir KO";
    console.log( prekiautojai [1] );

    let temp = prekiautojai[2];
    prekiautojai[2] = prekiautojai [3];
    prekiautojai[3] = temp;
    console.log( prekiautojai   );

function sukeistiMasyvo2elementus(x, y) {
    let temp = prekiautojai[2];
    prekiautojai[2] = prekiautojai [3];
    prekiautojai[3] = temp;
}
console.log( prekiautojai   );

// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========

var auto = ["BMW", ]
