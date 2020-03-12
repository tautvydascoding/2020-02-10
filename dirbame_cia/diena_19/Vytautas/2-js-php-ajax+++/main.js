console.log("ar veikia?");

$('#btn-isvedimas').on('click', function(){
//     $('body').css('background-color', 'black');
//     $('body').css('color', 'white');
// });

 // JavaScript -->
$.ajax({
  url: "controller/getDoctor-ajax.php",
  type: "POST",
  data: { sk: "2" },
  success: function(grizo){
        console.log("ajax success, php faile nera klaidu");
        console.log(grizo);

        // =======jei PHP darot: echo "String";================
        // gryzoPaverstasIString = JSON.stringify(gryzo);
        // console.log(gryzoPaverstasIString);
        // $("#results").append(gryzoPaverstasIString.vardas);
                /* OR */
        //====== jei PHP darot: echo parseTOJSON( $manoAray);====
        // kintamasis 'gryzo' - yra string tipo:  { 'vardas': 'John', 'vietove': 'Boston' }
        gyd_objektas = JSON.parse(grizo);
        // JSON.parse sukuria is String (kuris atrodo kaip JSON)
        // tikra JSON objekta
        console.log(gyd_objektas);
        //this is what I am unsure about?
        document.querySelector('#gyd-duomenys').innerHTML += gyd_objektas.Lname;
        document.querySelector('#gyd-duomenys').innerHTML += gyd_objektas.name;
        document.querySelector('#gyd-duomenys').innerHTML += gyd_objektas.id;

  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#results").append( "Request failed: " + e );
       console.log("NESUVEIKE!@@@");
 }
});
});
