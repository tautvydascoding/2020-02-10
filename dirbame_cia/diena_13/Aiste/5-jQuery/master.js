console.log( " Labas ");



// 1. su js  pakeisti 'header' H1 teksta i " Pakeistas su js"
document.querySelector('header h1').innerHTML = 'Pakeistas su js';

// 2. su jQury  pakeisti 'footer' H2 teksta i " Pakeistas su JQ"
$('footer h4').text(" Pakeistas h4 su JQ ");
$('footer h2').text(" Pakeistas h2 su JQ ");


// 3. su jQuery paimti  'footer' h1 tekta ir atspausdinti i console
let tekstas = $('footer h2').text();
console.log('paimtas footer h2 tekstas: ' + tekstas);


// 4. su jQury    sukurti elementa 'section' su tekstu 'mano tekstas'
$('<section></section>').text("mano tekstas");

$('header').append(  $('<section></section>').text("elementas section - mano tekstas - i header")  );
$('footer').append(  $('<section></section>').text("elementas section - mano tekstas - i footer")  );

// 5. su jQury   elementa 'section' ideti i HTML faila su jquery tarp 'header' ir 'footer'
$('<section></section>').text("mano tekstas po header").insertAfter( 'header');
$('<section></section>').text("mano tekstas po footer").insertAfter( 'footer');

// 6. uzdeti klase 'bg-info' ant visu h4
$('h4').addClass('bg-info');

// 7. uzdeti klase bg-warning ant 'header'
$('header').addClass('bg-warning');

// 8. uzdeti atributa 'width=30%' ant 'header'
$('header').attr('width','10%');

// 9.  su jQuery pakeisti  'input' ivedimo  'value'reiksme (pvz: .val('tomas'))
$('input').val('tomas');


// 10. nuimti klase bg-warning nuo 'header'
$('header').removeClass( 'bg-warning' );

