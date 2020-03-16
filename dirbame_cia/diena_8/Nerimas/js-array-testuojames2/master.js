
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

var automobilis = ["BMW", 10000, 98000 ];
console.log( automobilis );
console.log("Pavadinimas: " + automobilis[0]);
console.log("Kaina: " + automobilis[1]  );
console.log("Rida: " + automobilis[2] );
// 2. padidinti kaina: 100
    automobilis[2] += 100;
// 3. padidinti rida: -50000
    automobilis[1] += -5000;
    console.log( "automobilis po redagavimo: ", automobilis   );
    automobilis[3] = "Petras";
console.log( "automobilis po redagavimo: ", automobilis   );
    automobilis[4] = 2014 ;
console.log( "automobilis po redagavimo: ", automobilis   );


document.querySelector('body').innerHTML += '<article>';
let tekstas1 = '<h2>' + automobilis[0] + automobilis[1] + automobilis[2] + '</h2>';
document.querySelector('article').innerHTML += tekstas1;

let tekstas2 = '<div>savininko vardas: ' + automobilis[3] + '</div>';
document.querySelector('article').innerHTML += tekstas2;

let tekstas3 = '<span>masinos metai: ' + automobilis[4] + " Rida: " + automobilis[1] +'</span>';
document.querySelector('article').innerHTML += tekstas3;

// sukurimas 1 budas:
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
