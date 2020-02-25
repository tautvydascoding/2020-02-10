console.log(" as veikiu");

// paimti tik tekstą...
$('h1').text();
console.log(  $('h1').text()  );

// pakeičia buvusį tekstą
$('h1').text("labas");
console.log(  $('h1').text("labas")  );

// paimti su <div>...
$('h1').html();
y = $('h1').html();
console.log(  $('h1').html()  );


// paimti ivedimo lauko info

// $("input[name='vardas']");
// console.log( $("input[name='vardas']") );

var ivestis = $('#pirmas').val();
console.log( "ivestas:" + ivestis);
