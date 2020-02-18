console.log(" Labas ");


function plotas() {

	 // alert("pradzia");
     console.log("suveikie f-ja");

	//suradimas
	let ivedimoLaukasVardas = document.querySelector('input');  // surandame HTML elemnta
	//test
	 console.log("surastas elmtas: ", ivedimoLaukasVardas);

	// paemimas
	let laukoPradineReiksme = ivedimoLaukasVardas.value;
	//test
	 console.log("paimta reiksme: ", laukoPradineReiksme);

	 // ivedimo lauko pakeitimas
	// ivedimoLaukasVardas.value = "  Pakeistas   ";  //querySelector - paieskos/selector komanda (veikia pagal CSS taiyskles pvz: '.class', '#id', )
	//test
	 // console.log("po pakeitimo lauko reiksme: ", ivedimoLaukasVardas.value);

	   //----ne ivedimo lauku keitimas -  --------

		 let manoP = document.querySelector('p');
		manoP.innerHTML = 	"ivedet: " + ivedimoLaukasVardas.value;	 //innerHTML - keicia surasto HTML elemento vidu
}
