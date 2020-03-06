console.log("ar veikia");

$('#btn-isvedimas').on('click', function(){
      console.log("veikia");
      

      $( 'body' ).toggleClass('naktis');
      // juodas - baltas fonas

      btn-istrynimas

$.ajax({
  url: "controller/getDoctor-ajax.php",
  type: "POST",
  data: {nr: 19},
  success: function(grizo){
        console.log("ajax suveike, pho faile nera sintakses klaidu");
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


      //   // ARBA
      //   $("#gyd-duomenys").append("<br>");         
      //   $("#gyd-duomenys").append("<br>");   
              
      //    $("#gyd-duomenys").append(grizoPaverstasIJSON.vardas);         
      //    $("#gyd-duomenys").append(grizoPaverstasIJSON.pavarde);
      //    $("#gyd-duomenys").append(grizoPaverstasIJSON.nr);

  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#gyd-duomenys").append( "Request failed: " + e );
       console.log("NESUVEIKE!@@@");

 }
});

});
