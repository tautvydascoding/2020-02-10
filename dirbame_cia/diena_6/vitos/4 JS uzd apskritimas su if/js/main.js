console.log(" Labas ");

alert("pradzia");

function plotas() {


     console.log("suveike f-ja");

	//suradimas
	let ivedimoLaukas = document.querySelector('#vardas');  // surandame HTML elemnta
	//test
	 // console.log("surastas elmtas: ", ivedimoLaukas);

	// paemimas
	let spindulysR = ivedimoLaukas.value;
	//test
	 // console.log("spindulio reiksme: ", spindulysR);

     let manoPlotas = Math.PI * spindulysR * spindulysR;

       let greeting;

       if (spindulysR < 0) {
         greeting = "per mazas";
     } else if (spindulysR > 50) {
         greeting = "per didelis";
       } else {
         greeting = manoPlotas;
       }
       let manoP = document.querySelector('p');
       manoP.innerHTML = 	"ivedet: " + greeting;




console.log("Apskritimo plotas: ", manoPlotas);
		 // let manoPlotas = document.querySelector('p');
		// plotas.innerHTML = 	"Apskritimas: " + manoPlotas.value;	 //innerHTML - keicia surasto HTML elemento vidu
}
