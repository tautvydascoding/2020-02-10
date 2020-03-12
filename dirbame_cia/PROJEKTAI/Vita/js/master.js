console.log("puslapis veikia...");

$('#btn-trinimas').on('click', function(event) {
$('body').css('background-color', 'blue');
$('body').css('color', 'red');


$.ajax({
  url: "gaminys-delete-ajax.php",
  type: "GET",
  data: {sk: "30"},
  success: function(grizo){
        console.log("ajax patikrinimas");
         // document.querySelector('#pranesimas').innerHTML = "preke istrinta";

        // =======jei PHP darot: echo "String";================
        // gryzoPaverstasIString = JSON.stringify(gryzo);
        // console.log(gryzoPaverstasIString);
        // $("#results").append(gryzoPaverstasIString.vardas);
                /* OR */
        //====== jei PHP darot: echo parseTOJSON( $manoAray);====
        // kintamasis 'gryzo' - yra string tipo:  { 'vardas': 'John', 'vietove': 'Boston' }
        gryzoPaverstasIJSON = JSON.parse(grizo);
        // JSON.parse sukuria is String (kuris atrodo kaip JSON)
        // tikra JSON objekta
        console.log(gryzoPaverstasIJSON);
        //this is what I am unsure about?
        document.querySelector('#pranesimas').innerHTML += gryzoPaverstasIJSON.preke;
        // document.querySelector('#gyd-duomenys').innerHTML += gryzoPaverstasIJSON.FirstName;
        // document.querySelector('#gyd-duomenys').innerHTML += gryzoPaverstasIJSON.id;
        // ARBA
         // $("#results").append(gryzoPaverstasIJSON.vardas);
  },

 //  error: function(e) {
 //       //called when there is an error
 //       //console.log(e.message);
 //       $("#results").append( "Request failed: " + e );
 //       console.log("NESUVEIKE!@@@");
 // }

});
});

// ================================

$(document).ready(function(){
    var commentCount = 2;
    $("button").click(function() {
        commentCount = commentCount + 2;
        $("#comments").load("../Gaminiai.php", {
            commentNewCount : commentCount
        });
    });
});

// ========================

var options = {
  bottom: '64px', // default: '32px'
  right: 'unset', // default: '32px'
  left: '32px', // default: 'unset'
  time: '0.5s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: false, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true
};

const darkmode = new Darkmode(options);
darkmode.showWidget();

// ========================



function placiau() {
  window.open("http://baigiamasis.webas/Pradzia.php");
}
// ============
// $('img').on('mouseenter',function(event){
//     $(this).toggleClass('permatomas');
// });
