console.log(" as veikiu");


// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX"
//( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

$('h1').text("Antraste nr. 2"); // pirmiau, o po to koreguojam...
$('h1:first').text("Antraste nr. 1");
$('h1').last().text("Antraste nr. 3");
// $('h1:last').text("Antraste nr. xxx");

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "

$('section h2').text("Pakeista antraste"); // per tarpa.

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

console.log( $('ul li.reklama').text() ); // ok

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

console.log( $('ul li').text() );  //  ok

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)

$('#it2').after($('#it1'));  // lyg ir ok
// console.log(  $('#it2').after($('#it1'))  );  // console neteisingai?
