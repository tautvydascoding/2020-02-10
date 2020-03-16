console.log(" as veikiu");


// jQuery:
// h1 paslepimas

//Selector .action
// $('h1').css("display", "none"); // laikinai pasisalina
// $('hi').css("opacity", "0.1"); // permatomas, 0- nematomas
// $('hi').css("visibility", "hidden"); // nematomas
// // $('h1').text()
// $('h1').show(3000); // h1 atsiradimas 3000ms=3s
// $('h1').hide(3000); // h1 paslepimas 3000ms=3s

// $('h1').toggle(3000); // h1 pasisleps arba bus rodomas
// $('h1').toggle(3000); // h1 pasisleps arba bus rodomas

// click on click
// $('h1').click(  function(event) {
//     $('h1').toggle(2000); // isnyksta arba atsiranda - pats pasirenka koki veiksma daryti
// });

//animate
$('footer').click(function(event) {
    $('h1').animate({
        "font-size" : "5px",
        "opacity" : 0.1
    }, 3000);
    $('h1').animate({
        "font-size" : "75px",
        "opacity" : 0.4
    }, 3000);
});

$('img').click(function(event) {
    // $( this ).css('opacity', '0.5');
$(  this  ).toggleClass('permatomas');
});
$("#on").click(function(event) {
$(  'body'  ).toggleClass('naktis');
});
