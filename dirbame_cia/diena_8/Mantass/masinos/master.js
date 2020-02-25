console.log(" as veikiu");
// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
var automobilis = ["BMW", 50000, 4215];
console.log(automobilis);
automobilis[1] += - 50000;
automobilis[2] += + 100
console.log("automobilis po redagavimo: ", automobilis);

automobilis[3]="Tomas"

console.log("automobilis po redagavimo: ", automobilis);

automobilis[4]=2004

console.log("automobilis po redagavimo: ", automobilis);
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
document.querySelector('body').innerHTML += '<article>article</article>'

let tekstas1 = '<h2>' + automobilis[0] + '</h2>'
document.querySelector('article').innerHTML += tekstas1

let tekstas2 = '<div> savininko vardas: ' + automobilis[3] + '</div>'
document.querySelector('article').innerHTML += tekstas2

let tekstas3 = '<span> masinos metai: ' + automobilis[4] + " Rida " + automobilis[1] + '</span>';
document.querySelector('article').innerHTML += tekstas3
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
