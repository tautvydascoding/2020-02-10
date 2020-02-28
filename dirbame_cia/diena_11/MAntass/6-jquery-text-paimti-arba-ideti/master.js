console.log(" as veikiu");

//paimsim h1 teksta ir isvesim i console

var x = $('h1').text(); //paima tik teksta, be div
var y = $('h1').html();

console.log(x);
console.log(y);
$('h1').text("Naujas tekstas");
$('h1').text(x + "Naujas tekstas");

//paimti ivedimo lauko info
var ivestasTekstas = $('#pirmas').val();
console.log("ivestas: " + ivestasTekstas);
