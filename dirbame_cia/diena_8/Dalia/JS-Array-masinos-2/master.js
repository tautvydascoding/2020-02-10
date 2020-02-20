console.log(" as veikiu");
// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
let masina = ["Audi", 100000, 15000];
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
document.querySelector('body').innerHTML += masina;
// 2. padidinti kaina: 100
masina[2] += 100;
document.querySelector('body').innerHTML += masina[2];
// 3. padidinti rida: -50000
masina [1] -= 50000;
document.querySelector('body').innerHTML += "   " + masina[1];
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
masina [3] = "Tomas";
document.querySelector('body').innerHTML += "   " + masina;

// 4.1 atspausdinti visus pakeistus masyvo duomenis

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

masina [4] = 2004
document.querySelector('body').innerHTML += "   " + masina;

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML

document.querySelector('body').innerHTML += " <article>  </article>";

document.querySelector('article').innerHTML += " <h2></h2>";

document.querySelector('article').innerHTML += " <div></div>";

document.querySelector('article').innerHTML += " <span></span>";
document.querySelector('h2').innerHTML += masina [0];
document.querySelector('div').innerHTML += masina [3];
document.querySelector('span').innerHTML += masina [4];


// document.querySelector('article').innerHTML =
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========
