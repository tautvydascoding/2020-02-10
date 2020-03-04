
<?php

include ('models/doctors.php');

$nr = $_GET['id'];
deleteDoctor($nr);

echo "pavyko";


// ta pati padaryti su DELETE




?>
