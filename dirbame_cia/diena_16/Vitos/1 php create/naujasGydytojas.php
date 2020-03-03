
<?php
include('models/doctors.php');

// $naujasGyd = createDoctor ('Lauras', 'Lauraitis', 'Z3');

// echo "pavyko sukurti gydytoja";
// echo "$doctors['FirstName'].$doctors['LastName']";

// echo "<h2>".$doctors['FirstName'].$doctors['LastName']."</h2>";


$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
// $zona = $_GET['sritis'];
createDoctor($vard, $parv, "z3");

//redirect - perkelimas
// http://webmokymai.ltu/diena_16/Vitos/1%20php%20create/index.php
header("Location: index.php");
exit();

echo "Pavyko sukurti";


 ?>
