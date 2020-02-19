console.log("array - testuojam ")


// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina

let auto = ["Volvo", 10000, 16000];
// 1. isvesti masyvo duomenis
document.querySelector("body").innerHTML += auto + "<br>"
// 2. padidinti kaina: 100
auto[2] += 100;
document.querySelector("body").innerHTML += auto[2] + "<br>"

// 3. padidinti rida: 5000
auto[1] += -5000;
document.querySelector("body").innerHTML += auto[1] + "<br>"

// 4. i masyva ideti papildomus duomenis: savininko vardas "..."
auto[3] = "savininko vardas: Gerdas";
document.querySelector("body").innerHTML += auto[3] + "<br>"

// 4.1 atspausdinti visus pakeistus masyvo duomenis
document.querySelector("body").innerHTML += auto + "<br>"

// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
auto[4] = 2004;
document.querySelector("body").innerHTML += auto[4] + "<br>"

// sunkesne:

// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
document.querySelector("body").innerHTML += "<article></article>" + "<br>"

// <article>
//      <h2> pavadinimas </h2>
document.querySelector("article").innerHTML += "<h2>" + auto[0] + "</h2>" + "<br>"

//      <div> savininko vardas: ...</div>
document.querySelector("article").innerHTML += "<div>" + auto[3] + "</div>" + "<br>"

//      <span> masinos metai: ...  Rida: ...</span>
document.querySelector("article").innerHTML += "<span>" + "masinos metai: " + auto[4] + " " + "Rida: " + auto[1] +"</span>" + "<br>"

//      i mygtuka ideti: masinos kaina ....
document.querySelector("article").innerHTML += "<button>" + "masinos kaina: " + auto[2] + "</button>" + "<br>"

// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========




