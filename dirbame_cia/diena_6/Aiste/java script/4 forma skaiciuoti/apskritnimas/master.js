console.log("labas");


// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================


// naudojantis uzduoties 3 pavayzdziu isspresti
//============== =========

// UZDUOTIS 1
// sukurti ivedimo lauka, naudojantis pvz 3,
// kur reikes ivesti apskritimo spinduli ,,R".
// Kai paspaudziamas mygtukas - paskaiciuojamas apskritimo plotas: Plotas = pi * R*R
// pi = Math.PI;



function keisti() {

    // let ivedimoLaukasVardas = Math.PI * (value * value);

   //suradimas
   let ivedimoLaukasVardas = document.querySelector("#vardas");  // surandame HTML elemnta
   //test
    console.log("surastas elmtas: ", ivedimoLaukasVardas );

   // paemimas
   let laukoPradineReiksme = Math.PI * (ivedimoLaukasVardas.value * ivedimoLaukasVardas.value);
   //test
    console.log("paimta reiksme: ", laukoPradineReiksme);

    // ivedimo lauko pakeitimas
   // ivedimoLaukasVardas.value = "  Pakeistas   ";  //querySelector - paieskos/selector komanda (veikia pagal CSS taiyskles pvz: '.class', '#id', )
   //test
    // console.log("po pakeitimo lauko reiksme: ", ivedimoLaukasVardas.value);


      //----ne ivedimo lauku keitimas -  --------

        
        let manoP = document.querySelector('p');
       manoP.innerHTML = 	"apskritimo plotas: " + laukoPradineReiksme;	 //innerHTML - keicia surasto HTML elemento vidu
}


//
//
//
//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;








// function circle(radius)
// {
//     this.radius = radius;
//   // area method
//     this.area = function () 
//     {
//         return Math.PI * this.radius * this.radius;
//     };
//   // perimeter method
//     this.perimeter = function ()
//     {
//         return 2*Math.PI*this.radius;
//     };
// }
// var c = new circle(3);
// console.log('Area =', c.area().toFixed(2));
// console.log('perimeter =', c.perimeter().toFixed(2));

// function circleArea(radius) {
//     let area = Math.PI * (radius * radius);
//     console.log(area);
//     console.log(Math.round(area*100)/100);
// }
 
// circleArea(5);
