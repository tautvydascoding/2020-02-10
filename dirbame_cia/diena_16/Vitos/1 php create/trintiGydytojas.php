<?php

include('models/doctors.php');

// deleteDoctor(17);
//
// echo "pavyko istrinti gydytoja";

$trinamoId = $_GET['sk'];
deleteDoctor ($trinamoId);


echo "pavyko istrinti gydytoja";
