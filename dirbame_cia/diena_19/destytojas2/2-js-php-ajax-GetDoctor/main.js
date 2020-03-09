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
            gyd_objektas = JSON.parse(grizo);
            // JSON.parse sukuria is String (kuris atrodo kaip JSON)
            // tikra JSON objekta
            console.log(gyd_objektas);
            //this is what I am unsure about?
            document.querySelector('#gyd-duomenys').innerHTML += gyd_objektas.lname;
            document.querySelector('#gyd-duomenys').innerHTML += gyd_objektas.name;
            document.querySelector('#gyd-duomenys').innerHTML += gyd_objektas.id;
       },

      error: function(e) {
           //called when there is an error
           //console.log(e.message);
           $("#gyd-duomenys").append( "Request failed: " + e );
           console.log("NESUVEIKE PHP failas!@@@");
     }
    });

});
