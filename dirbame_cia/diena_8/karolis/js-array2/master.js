console.log(" as veikiu");
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

// 1. isvesti masyvo duomenis
var masina = [" pavadinimas", " pravaziuota rida"," kaina"];
console.log(masina);
// 2. padidinti kaina: 100
var simtas = masina[2] + " +100";
console.log(simtas);
// 3. padidinti rida: -50000
var rida = masina[1] + " -50000";
console.log(rida);
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
var masina = [" pavadinimas"," pravaziuota rida"," kaina"," Savininko vardas Tomas"]
// 4.1 atspausdinti visus pakeistus masyvo duomenis
console.log(masina);
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
var masina = [" pavadinimas"," pravaziuota rida"," kaina"," Savininko vardas Tomas"," masinos metai 2004" ];
console.log(masina);

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// document.querySelector("body").innerHTML += "<article>article</article>"
// var tekstas1 = <h2> +
// // 6. atspausdinti masyvo duomenis i ekrana:
// // <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========
