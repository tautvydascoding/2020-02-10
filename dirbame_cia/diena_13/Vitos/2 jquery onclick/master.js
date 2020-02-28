console.log(" as veikiu");

//
//paslepimas
//
// $('h1').css('display','none');
// $('h1').css('opacity','0.3');
// $('h1').css('color','blue');
// $('h1').css('visibility','hidden');
// $('h1').text(3000);
// $('h1').hide(3000);
// $('h1').show(3000);
// $('h1').toggle(3000);
// $('h1').toggle(3000);

// click - paspaudus
//
// $('footer').click( function(event){
//     console.log('paspaudete footer');
//     $('h1').toggle(2000);
// });


// animate - gerai veikia
//
// $('footer').click(function(event) {
//     $('h1').animate({
//         "font-size": "10px",
//         "opacity": 0.1
//     }, 3000);
//     $('h1').animate({
//         "font-size": "50px",
//         "opacity": 0.4
//     }, 3000);
// });

// animate - nuotraukos
// -- 'img' taikys visoms arba 'this' tik spaudziamai
$('img').click(function(event){
    // $('img').css('opacity', '0.5');
    // $(this).css('opacity', '0.5');
    // kai main.css faile sukurta klase
    $(this).toggleClass('permatomas');
});

$('#on').click(function(event){
    $('div').toggleClass('naktis');
});

$('img').on('mouseenter',function(event){
    $(this).toggleClass('permatomas');
});
