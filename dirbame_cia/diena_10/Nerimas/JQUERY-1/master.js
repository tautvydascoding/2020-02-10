var x = 10; // globalus

$(function() {
    x = 20; // globalus
    var y = 90; // local
    console.log("kraunasi");
    document.querySelector('body').innerHTML += "Naujiena 30%";
});
// console.log( y ); // ERROR, nes y yra nepasiekiamas, local

$( "article > p" ).css( "border", "1px solid gray" );

var myCSS = {
    "border": "1px solid gray",
    "color" : "red"
};
$( "article p" ).css( myCSS);
$( "li" ).last().css( "background", "yellow" );
$( "article" ).css( "background", "black" );
