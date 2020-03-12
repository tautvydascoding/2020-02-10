console.log("labas");

$('.btn-istrinti').on('click', function(){
    console.log("veikia mygtukas");
    // let prekesNumeris = $(this).parent(); // article
    // console.log( prekesNumeris);// test
    let prekesNumeris = $(this).parent().attr('skaicius') ; // article
    console.log(prekesNumeris);

    $.ajax({
      url: "controller/deleteDoctor-ajax.php",
      type: "GET",
      data: { numeris: prekesNumeris },
      success: function(grizo){
            console.log("ajax success, php faile nera sintakses klaidu");

             document.querySelector('.zinute').innerHTML =   prekesNumeris + " Gydytojas istrintas sekmingai";
       },

      error: function(e) {
           //called when there is an error
           //console.log(e.message);
           $(".zinute").append( "Request failed: " + e );
           document.querySelector('.zinute').innerHTML = "Programuotojai ispyle kava- kazkas negerai PHP faile" + e;

     }
    });

});
