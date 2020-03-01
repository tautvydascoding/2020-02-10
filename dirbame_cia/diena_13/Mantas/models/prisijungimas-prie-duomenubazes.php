<!-- <?php


// $gyd1 = getDoctor(1);
// print_r( $gyd1 );
function getDoctors() {
    $manoSQL = "Select * FROM doctors  ";
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultataiOBJ;
}
// $visiGydytojaiOBJ = getDoctors();
// $gydytojas1=mysqli_fetch_assoc($visiGydytojaiOBJ);
// print_r ($gydytojas1);
//
// while ($gydytojas1) {
// echo "<h2>". $gydytojas1  ['name']. $gydytojas1['lname']."</h2>";
// $gydytojas1 = mysqli_fetch_assoc($visiGydytojaiOBJ);
}

$numeris = 2;
include("Models/doctors.php");
$gydytojas = getDoctor($numeris);
print_r($gydytojas); //gmp_test
echo $gydytojas["name"] . $gydytojas['lname'];
