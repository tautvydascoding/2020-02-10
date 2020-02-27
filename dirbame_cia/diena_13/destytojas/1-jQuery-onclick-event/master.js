console.log(" as veikiu");


// jQuery
// h1 paslepimas

// selector .action
// $('h1').css("display", "none"); // laikinai pasalinamas
// $('h1').css("opacity", "0.1");  // permatomas, 0- nematomas
// $('h1').css("visibility", "hidden"); // nematomas
// $('h1').text()
// $('h1').hide(3000);   // h1 paslepimas
// $('h1').show(3000);   // h1 paslepimas
// $('h1').toggle(3000);   // h1 pasisleps arba bus rodomas
// $('h1').toggle(3000);   // h1 pasisleps arba bus rodomas


// click on click
// kai paspaudi h1
// $('footer').click(    function(event) {
//     console.log("paspaudet footer");
//     $('h1').toggle(2000);  // isnyksta arba atsiranda - pats patikrina
// });

// animate
$('footer').click(function(event) {
    $('h1').animate({
        "font-size" : "5px",
        "opacity" : 0.1
    }, 3000);
    $('h1').animate({
        "font-size" : "75px",
        "opacity" : 0.4
    }, 1000);
});

 // this
$('img').click(function(event) {
    // $( this ).css('opacity', '0.3'); //
    $( this ).toggleClass('permatomas');
});
$('#on').click(function(event) {
    $( 'body' ).toggleClass('naktis');
});
$('img').on('mouseenter',function(event) {
    $( this ).toggleClass('permatomas');
});


 //
