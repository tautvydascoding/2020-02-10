console.log(" as veikiu");

// delete
$('#btn-delete').on('click', function(){
    console.log("veikia mygtukas");
$.ajax({
    type: "GET",
    url: "controller/naujienaDelete-ajax.php",
    data: {nr: "nr"},
    success: function(Ndelete) {
        console.log("ajax suveike, php faile nera sintakses klaidu");
        console.log(Ndelete);

        naujiena_objektas = JSON.parse(Ndelete);
        console.log(naujiena_objektas);
    },
    error: function(e) {
        //called when there is an error
        //console.log(e.message);
        console.log("NESUVEIKE!@@@");
  }
});
});

// update
$('#btn-update').on('click', function(){
    console.log("veikia mygtukas");
$.ajax({
    type: "GET",
    url: "controller/naujienaUpdate-ajax.php",
    data: {nr: "nr"},
    success: function(Ndelete) {
        console.log("ajax suveike, php faile nera sintakses klaidu");
        console.log(Ndelete);

        naujiena_objektas = JSON.parse(Ndelete);
        console.log(naujiena_objektas);
    },
    error: function(e) {
        //called when there is an error
        //console.log(e.message);
        console.log("NESUVEIKE!@@@");
  }
});
});