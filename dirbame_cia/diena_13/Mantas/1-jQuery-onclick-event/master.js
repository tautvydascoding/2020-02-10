console.log(" as veikiu");
//h1 paslepimas
//jquery

// $('h1').css("display", "none");
// // $('h1').css("opacity", "0.2");
// $('h1').show(3000);
// $('h1').hide(3000);
// $('h1').show(3000);
// $('h1').toggle(3000);

//click on click



//animate
$("footer").click(function(event) {
    $("h1").animate({
        "font-size" : "75px",
        "opacity" : 0.4
    },1000);

});

$("img").click(function(event) {
    $(this).css('opacity', '0.5');
    $(this).toggleClass('permatomas')
});

$('#on').click(function(event) {
    $('body').toggleClass('naktis');
});
