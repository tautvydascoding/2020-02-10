console.log("ar veikia?");

<!-- // JavaScript -->
$('#btn-isvedimas').on('click', function() {
    $('body').css('background-color', 'black');
    console.log("veikia mygtukas");
    $('body').css('color', 'white');
});
$.ajax({
  url: "controller/getDoctor-ajax.php",
  type: "POST",
  data: {sk: "4"},
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
  //       gryzoPaverstasIJSON = JSON.parse(gryzo);
  //       // JSON.parse sukuria is String (kuris atrodo kaip JSON)
  //       // tikra JSON objekta
  //       console.log(gryzoPaverstasIJSON);
  //       //this is what I am unsure about?
  //       document.querySelector('#results').innerHTML += gryzoPaverstasIJSON.vietove;
  //       // ARBA
  //        $("#results").append(gryzoPaverstasIJSON.vardas);
  // },

  // error: function(e) {
       //called when there is an error
       //console.log(e.message);
       // $("#results").append( "Request failed: " + e );
       // console.log("NESUVEIKE!@@@");
 }
});
