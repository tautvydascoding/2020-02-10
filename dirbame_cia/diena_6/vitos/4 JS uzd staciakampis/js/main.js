console.log(" Labas ");

alert("pradzia");

function plotas() {


     console.log("suveike f-ja");

	//suradimas
	let ivedimoLaukas1 = document.querySelector('input#aukstis');  // surandame HTML elemnta
	//test
	 console.log("surastas elmtas: ", ivedimoLaukas1);

	// paemimas
	let aukstisK = ivedimoLaukas1.value;
	//test
	 console.log("aukstis: ", aukstisK);

     let ivedimoLaukas2 = document.querySelector('input#ilgis');  // surandame HTML elemnta
 	//test
 	 console.log("surastas elmtas: ", ivedimoLaukas2);

 	// paemimas
 	let ilgisL = ivedimoLaukas2.value;
 	//test
 	 console.log(" ilgis: ", ilgisL);

let manoPlotas = aukstisK * ilgisL;

console.log("Staciakampio plotas: ", manoPlotas);
		 // let manoPlotas = document.querySelector('p');
		// plotas.innerHTML = 	"Apskritimas: " + manoPlotas.value;	 //innerHTML - keicia surasto HTML elemento vidu
}
