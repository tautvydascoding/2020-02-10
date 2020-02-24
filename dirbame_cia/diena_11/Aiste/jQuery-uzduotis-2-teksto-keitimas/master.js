console.log(" as veikiu");



// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX"
//( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

$('h1').text("Antraste nr: 2"); // visus pervadina

$('h1').first().text("Antraste nr: 1"); // pervadina tik pirma
$('h1').last().text("Antraste nr: 3"); // pervadina paskutini


//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "

$('section h2').text("Pakeista antraste");



// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

console.log( $('li.reklama').text());



// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

console.log( $('li').text());


//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)


$("#liWithID").replaceWith("<p>Socks</p>");


// var Text = $('li.reklama').text()('Galery');
// var Text2 = $('li.about').text()('Abaut');

// $("li.reklama").replaceWith(Text2);
// $("li.about").replaceWith(Text);


// console.log( $('li').text());



//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)

$('li.reklama').css('color', 'red');


// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"


$('li').addClass('nav-item');
console.log( $('li.nav-item').text());

$('li').first().addClass('active');
console.log( $('li.nav-item.active').text());


// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'

$(this).prev('input').val("xxx");

$('input[name="vardas"]').val('Tomas'); 

$( 'input[name="pastas"]' ).val('a@a.lt');