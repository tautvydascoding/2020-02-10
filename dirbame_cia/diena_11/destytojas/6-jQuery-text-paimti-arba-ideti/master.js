console.log(" as veikiu");
//

// paimsism h1 teksta ir isvesim i console
var x = $('h1').text(); // paima tik teksta , be <div
var y = $('h1').html(); // paima teksta su <div ...

console.log(    x    );
console.log(    y    );
// teksto pakeitimas
$('h1').text(  "Naujas tekstas" );
// $('h1').text( x + "Naujas tekstas");

// paimit ivedimo lauko info
// $("input[name='vardas']")
var ivestisTekstas = $('#pirmas').val(); // val - value informacija
console.log("ivestas: " + ivestisTekstas);

$('#pirmas').val("JUOZAS");
