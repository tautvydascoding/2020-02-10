console.log("ar veikia?");

$('.btn-istrinimas').on('click', function(){

 let prekesNumeris = $(this).parent().attr('skaicius'); // article elementas
console.log(prekesNumeris);

$.ajax({
  url: "controller/deleteDoctor-ajax.php",
  type: "GET",
  data: { sk: prekesNumeris },
  success: function(grizo){
        console.log("pavyko istrinti");
  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $("#zinute").append( "Request failed: " + e );
       console.log("NESUVEIKE!@@@");
 }
});
});
