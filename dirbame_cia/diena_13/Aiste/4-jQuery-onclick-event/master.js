console.log(" as veikiu");


//  jQuery

// h1 paslepimas


// selector . action
// $('h1').css()
// $('h1').text()

// $('h1').hide(3000);     // h1 paslepimas

// $('h1').css("display", "none");          // h1 laikinai isimamas elementas
// $('h1').css("opacity", "0.1");           // permatomas, 0- nematomas
// $('h1').css("visibility", "hidden");     // h1 nematomas
// $('h1').show(3000);                      // h1  atsiradimas

// $('h1').hide(3000);
// $('h1').show(3000);

// $('h1').toggle(3000);           // h1 pasisleps arba bus rodomas, priklausomai nuo kaip yra dabar



//  CLICK    on  click
// 
// $('footer').click(function (e) {                            //ant ko paspaudus
//     $('h1').toggle(1000);       //isnyksta paspaudus        // ka daryti
// });


//  SLIDE
//
// $('h1').click(function (e) {
//     $('h1').slideDown(1000);
//   });


// ANIMATE
//
// $('footer').click(function(e){
//     $('h1').animate({
//         "font-size" : "5px",
//         "opacity" : 0.1
//     }, 3000);
//     $('h1').animate({
//         "font-size" : "75px",
//         "opacity" : 0.4
//     }, 1000);
// });


//  THIS === ta redaguoja ant kurio paspaudziu
// 
// $('img').click(function(e){
//     $( this ).css('opacity','0.5');

// });


// PAKEITIMAS SU CSS KLASE

// // su toggleClass atsispaudzia
// $('img').click(function(e){
//     $( this ).toggleClass('permatomas');
// });



// ijungimas ir isjungimas nakties rezimo
$('#on').click(function(e){
    $( 'body' ).toggleClass('naktis');
});



$("img").on("mouseenter", function(){
    $(this).toggleClass('permatomas');
  });

