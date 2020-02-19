console.log(" Labas ");

alert("pradzia");

function plotas() {


     console.log("suveike f-ja");

	//suradimas
	let ivedimoLaukas1 = document.querySelector('input#aukstis');  // surandame HTML elemnta
	//test
	 // console.log("surastas elmtas: ", ivedimoLaukas1);

	// paemimas
	let aukstisK = ivedimoLaukas1.value;
	//test
	 // console.log("aukstis: ", aukstisK);

     let ivedimoLaukas2 = document.querySelector('input#ilgis');  // surandame HTML elemnta
 	//test
 	 // console.log("surastas elmtas: ", ivedimoLaukas2);

 	// paemimas
 	let ilgisL = ivedimoLaukas2.value;
 	//test
 	 // console.log(" ilgis: ", ilgisL);

let manoPlotas = aukstisK * ilgisL;

let greeting;

if (aukstisK < 0 || ilgisL < 0) {
  greeting = "neskaiciuoja del minuso";
} else if (aukstisK > 50 || ilgisL > 50) {
  greeting = "per didelis";
} else {
  greeting = manoPlotas;
}
let manoP = document.querySelector('p');
manoP.innerHTML = 	"suskaiciuotas stac.plotas: " + greeting;

console.log("Staciakampio plotas: ", greeting);
		 // let manoPlotas = document.querySelector('p');
		// plotas.innerHTML = 	"Apskritimas: " + manoPlotas.value;	 //innerHTML - keicia surasto HTML elemento vidu
}
