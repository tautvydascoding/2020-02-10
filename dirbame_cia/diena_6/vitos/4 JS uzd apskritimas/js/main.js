console.log(" Labas ");

alert("pradzia");

function plotas() {


     console.log("suveike f-ja");

	//suradimas
	let ivedimoLaukas = document.querySelector('input');  // surandame HTML elemnta
	//test
	 console.log("surastas elmtas: ", ivedimoLaukas);

	// paemimas
	let spindulysR = ivedimoLaukas.value;
	//test
	 console.log("spindulio reiksme: ", spindulysR);

let manoPlotas = Math.PI * spindulysR * spindulysR;

console.log("Apskritimo plotas: ", manoPlotas);
		 // let manoPlotas = document.querySelector('p');
		// plotas.innerHTML = 	"Apskritimas: " + manoPlotas.value;	 //innerHTML - keicia surasto HTML elemento vidu
}
