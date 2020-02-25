console.log(" as veikiu");
//
//paimsim h1 teksta ir isvesim i konsole
var x = $('h1').text(); // paima tik teksta, be <div
var y = $('h1').html(); // paima teksta su <div...

console.log( x );
console.log( y );
//teksto pakeitimas
$('h1').text("Naujas tekstas");
// $('h1').text( x + "Naujas tekstas"); jei reikia sudeti tekstus

//paimti ivedimo lauko info
var ivestisTekstas = $("#pirmas").val(); // val - paima value info
var ivestisTekstas1 = $("#antras").val(); // val - paima value info
console.log("ivestas: " + ivestisTekstas);
$('#pirmas').val("Juozas");
