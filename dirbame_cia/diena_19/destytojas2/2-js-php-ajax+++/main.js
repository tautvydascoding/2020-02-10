console.log("ar veikia?");

$('#btn-isvedimas').on('click', function(){
    console.log("veikia mygtukas");
    // $('body').css('background-color', 'black');
    // $('body').css('color', 'white');

    $.ajax({
      url: "controller/getDoctor-ajax.php",
      type: "POST",
      data: { sk: "4" },
      success: function(grizo){
            console.log("ajax success, php faile nera sintakses klaidu");
            console.log(grizo);

            //====== jei PHP darot: echo parseTOJSON( $manoAray);====
            // kintamasis 'grizo' - yra string tipo:  { 'vardas': 'John', 'vietove': 'Boston' }
            gryzoPaverstasIJSON = JSON.parse(grizo);
            // JSON.parse sukuria is String (kuris atrodo kaip JSON)
            // tikra JSON objekta
            console.log(gryzoPaverstasIJSON);
            //this is what I am unsure about?
            document.querySelector('#gyd-duomenys').innerHTML += gryzoPaverstasIJSON.lname;
            document.querySelector('#gyd-duomenys').innerHTML += gryzoPaverstasIJSON.name;
            document.querySelector('#gyd-duomenys').innerHTML += gryzoPaverstasIJSON.id;
       },

      error: function(e) {
           //called when there is an error
           //console.log(e.message);
           $("#results").append( "Request failed: " + e );
           console.log("NESUVEIKE PHP failas!@@@");
     }
    });

});
