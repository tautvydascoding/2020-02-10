console.log("ar veikia");

$('.btn-istrynimas').on('click', function(){
      console.log("veikia");
      
      // let prekesNumeris = $(this).parent();  // siuo atveju paimam ARTICLE elementa

      // let prekesNumeris = $(this).parent().parent();     // siuo atveju paimam BODY elementa
      // console.log(prekesNumeris);  //test
        

      let prekesNumeris = $(this).parent().attr('skaicius');  // siuo atveju paimam ARTICLE SKAICIUS elementa
      console.log(prekesNumeris);  //test

 
$.ajax({
  url: "controller/deleteDoctor.php",
  type: "GET",
  data: {nr:prekesNumeris },
  success: function(grizo){
        console.log("ajax suveike, pho faile nera sintakses klaidu");
        console.log(grizo);
        console.log('issitryne');

      $('.btn-istrynimas').css('display','none');
      document.querySelector('.zinute').innerHTML += 'gydytojas istrintas: ' + prekesNumeris;
  },

  error: function(e) {
       //called when there is an error
       //console.log(e.message);
       $(".zinute").append( "Request failed: " + e );
       document.querySelector('.zinute').innerHTML += 'ERROR';
            }
      });
});
