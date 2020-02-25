console.log(" as veikiu");

// paimsim h1 ir isvesim i console

var x = $('h1').text(); // paima tik teskta be <div>

var y = $('h1').html(); //paima teksta su <div> ir pan

console.log( x );
console.log( y) ;



// teksto pakeitimas 

$('h1').text(" naujas tekstas");


// teksto pridejimas

$('h1').text( x + " naujas tekstas");

// $('h1').text( $('h1').text() + " naujas tekstas");


// paimti ivedimo lauko info

var ivestasTekstas = $( 'input[name="vardas"]' ).val();

console.log('ivestas: ' + ivestasTekstas);



var ivestasTekstas2 = $( 'input[name="klausimas"]' ).val();

console.log('ivestas: ' + ivestasTekstas2);
