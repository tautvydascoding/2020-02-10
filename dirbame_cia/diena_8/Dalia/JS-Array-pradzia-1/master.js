console.log(" as veikiu");
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	//
    //SUKURIMADS
    var masyvas = [];// tuscias masyvas
    var masyvas2 = ['Jonas', 25, "Vagis"];
    console.log( masyvas2 );
     //PAKEITIMAS
        masyvas2[1]++; //gersenis budas
        masyvas2[1] = 26;//prastesnis budas
     //STENGTIS NENAUDOTI SKAICIU

     console.log( masyvas2 );//viso masyvo isvedimas
     //masyvas2 = "Antanas"; //dazniausia klaida
document.querySelector('body').innerHTML += "Vardas  : " +  masyvas2[0] + " Specialybe: " + masyvas2[2];
//UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"
    // 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

var prekiautojai = [];
prekiautojai [0] = "Senukai";
prekiautojai [1] = "Ermitazas";
prekiautojai [2] = "Moki-Vezi";

console.log(prekiautojai);
document.querySelector('body').innerHTML += prekiautojai;


	// 2 pervadinti pirmo stalciaus turini pridedant teksta pvz + "ir KO"
    prekiautojai[0] += " ir Ko"
    console.log(prekiautojai);

    // var laikinas =  prekiautojai [1]
    // prekiautojai [1] = prekiautojai[2];
    // prekiautojai [2]= laikinas;
    // console.log(prekiautojai);
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

function sukeistiMasyvo2elementus(x,y){
    let laikinas = prekiautojai[x];
    prekiautojai [x] = prekiautojai [y];
    prekiautojai [y] = laikinas;
    console.log(prekiautojai);
}
sukeistiMasyvo2elementus (2,1);
sukeistiMasyvo2elementus (4,0);
	// var prekiautojai = []; // empty array
