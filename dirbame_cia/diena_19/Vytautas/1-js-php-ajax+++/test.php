<?php



//get data passed to from main.js script
$username =  $_POST["name"];
$vieta =  $_POST["location"];
// su apsauga nuo hackinimo:
$username = htmlspecialchars(strip_tags($_POST["name"]), ENT_QUOTES);


//=============return "STRING"=================
// echo "vardas22: " . $username . " vietove22: " . $_POST['location'] ;
//    OR
//============ return json objekta=================
$x = $_POST["name"];
$manoAray = ['vardas' => $x, 'vietove' => $_POST["location"] ];
echo json_encode( $manoAray ); // { 'vardas': 'Tautvis', 'vietove': 'Boston' }
