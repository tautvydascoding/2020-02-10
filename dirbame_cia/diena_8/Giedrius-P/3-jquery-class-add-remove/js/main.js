console.log("Labas");

// _______naudojant tik js_________(create and add_class)_____
//  atlikti   uzduotis naudojant tik jQuery

// 1.1  sukurti:
// <section>
//     <h1>  Tekstas </h1>
// </section>
$("body").append("<article></article>");
$("article").append("<h1> Tekstas </h1>");
//1.2 patobulinti h1 -  ant h1 elemento uzdesime klases: " bg-info  mt-5 aukstis-200" (naudojant jQuery)
$('h1').addClass("bg-info").addClass( "mt-5").addClass( "aukstis-200");
// pvz:
   // <h1 class="bg-info mt-5 aukstis-200">  Tekstas </h1>


// 1.3  nuo h1 pasalinti mt-5 klase
$("h1").removeClass('mt-5');
// 1.4  paleisti komanda   toggleClass( 'aukstis-200')  -
$('h1').toggleClass('aukstis-200');
// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')  -
// KAS pasikeite?
$('h1').toggleClass('aukstis-200');

// 2. Patikrinti ar h1 turi klase 'bg-info':
if($('h1').hasClass('bg-info')){
 $('h1').addClass('bg-danger');
} else {
  $('h1').addClass('bg-success');
}
// jeigu NETURI  uzdeti klase "bg-success"
// jeigu TURI  uzdeti klase "bg-danger"

// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
if($('article').hasClass('ausktis-200')){
  $('article').addClass('aukstis-500');
} else {
  $('article').addClass('aukstis-200');
}
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500"
