console.log(" as veikiu");

// // jQuery

// // php
// $x = 10;

// //jQuery
// var x = 10;
// $('body');


// var x = 10;
// // // //Execute the function when the DOM is ready to be used.

// //su sita funkcija uzsikrauna tik tada kai puslapis visas uzsikrauna
// $(function() {
//     // Document is ready
//     x = 20; //global
//     var y = 90; // local
//     console.log("uzsikrove visa svetaine");
//     document.querySelector("img").innerHTML += "Naujiena 30%"    
// });

// console.log( y ); // ERROR , nes y yra funkcijoje, local

//ilgesns budas
// jQuery(function( $ ) {
//     // Your code using failsafe $ alias here...
// });



// // //============= CSS ===============

// $( "article > p" ).css( "border", "1px solid gray" );

// // // arba

var myCSS = {
    "border": "3px solid gray",
    "color": "red"
};
$( "article > p" ).css( myCSS );


// advance: get curent width and height 

// ieskojimas ir keitimas 

$("p").css(
    {
	  width: function( index, value ) {
		console.log("curent width:" + value);
		return parseFloat( value ) * 1.2;
	  },
	  height: function( index, value ) {
		console.log("curent height: " + value);
		return parseFloat( value ) * 3;
  }
});


// ======================= selectors kaip CSS =========

// // keliu elementu select'as (select h1 and h2 elements)
$( "h1, h2" ).css( "background", "black" );
// $( "h1" ).css().add( "h2" ).css( "background", "yellow" );


// // paveiks paskutini is li elementu
$( "li" ).last().css( "background", "yellow" );
$( "li:last" ).addClass( "selected highlight" );

$( "p:even" ).css("background", "grey"); // lyginiai skaiciai
$( "p:odd" ).css("background-color", "pink"); //  nelyginis

// $( "p:eq(1)" ); // pirmas

// $( "h1", "form" ).addClass( "bar" );
// $( "form h1" ).addClass( "bar" );
// // // !!! importnat sekantis parametras nurodo kur ieskoti. pvz ^ h1 bus ieskomas TIK form'os viduje !!!

// // // more complex  - antras .css() suveiks abiems elementams (h1 ir h2)
// $( "h1" ).css( "font-size", "8px" ).add( "h2" ).css( "background", "yellow" );


// veiksmus atlieka surasyta tvarka
$( "header" ).css( "color", "red" ).find( "h1" ).css( "color", "green" );  // note: find(...) - iesko elemento viduje selected item
// headeryje iesko h1



// form'os lauku select'as

$( "input[type='email']").val("petras@gmail.com");    // will return the current real value of a text field, for example if the user typed something there after a page load.

//ieskom imput kurio tipas email
// ir tada ji uzpildome ivedimo lauka



// note: $("input[type='email']").attr('value') // will return value from DOM/HTML.
// html

// <input type="email" value="" destytojas="tautvydas">
// <input type="text" value="">

// input[type='email'] {
//     color: red;
// }

// // // brolius ir seses Isskyrus h2 pati

// // $("body h2").siblings().css({"color": "red", "border": "2px solid red"});

// // h2 brolius kurie yra "p", bet nera h2 ar kiti
// // $("h2").siblings("p").css({"color": "orange", "border": "2px solid red"});
// // sekanti brolini elementa
// // $("h2").next().css({"color": "red", "border": "2px solid red"});
// // $("h2").nextAll();
// // $("h2").nextUntil("h6"); // !!! tik su elementais, su class
