console.log("labas");


// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================
//
//
//
//  // UZDUOTIS 2
// sukurti ivedimo 2 laukus, naudojantis pvz 3,
// kur reikes ivesti staciakampio auksti ir ploti.
// Kai paspaudziamas mygtukas - paskaiciuojamas staciakampio plotas:
// Plotas  = x * y;




function keisti() {


 //suradimas
 let ivedimoLaukasVardas1 = document.querySelector("#aukstis");   // surandame HTML elemnta
 let ivedimoLaukasVardas2 = document.querySelector("#plotis");  // surandame HTML elemnta

 //test
  console.log("surastas elmtas: " + " "  + ivedimoLaukasVardas1 + " " + ivedimoLaukasVardas2);

 // paemimas
 let laukoPradineReiksme = (ivedimoLaukasVardas1.value * ivedimoLaukasVardas2.value);
 //test
  console.log("paimta reiksme: ", laukoPradineReiksme);

  // ivedimo lauko pakeitimas
 // ivedimoLaukasVardas.value = "  Pakeistas   ";  //querySelector - paieskos/selector komanda (veikia pagal CSS taiyskles pvz: '.class', '#id', )
 //test
  // console.log("po pakeitimo lauko reiksme: ", ivedimoLaukasVardas.value);


    //----ne ivedimo lauku keitimas -  --------

      
      let manoP = document.querySelector('p');
     manoP.innerHTML = 	"staciakampio plotas: " + laukoPradineReiksme;	 //innerHTML - keicia surasto HTML elemento vidu
}







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
