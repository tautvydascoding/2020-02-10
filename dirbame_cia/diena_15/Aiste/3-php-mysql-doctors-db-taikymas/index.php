
<?php
include ('models/doctors.php');

// uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4

    // $id = 19;
    // $gydytojas = getDoctor( $id);

    // print_r($gydytojas); //pasitikrinti kokius turiu stalcius

    // echo "<hr>";

    // echo "<h2>" . $gydytojas['name'] . " " . $gydytojas['lname'] . "</h2>";
    // echo "<hr>";



// uzduotis istrinti 2 uzduoti


// uzduotis 3.1: atspausdinti visas gydytoju pavardes , kaip list item "ul li"

// while($gydytojas) {
//     echo "<ul><li>" . $gydytojas['name'] . " " . $gydytojas['lname'] . "</ul></li>";
//     $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
// }

$visiGydytojaiOBJ =  getDoctors();
$gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);

print_r($gydytojas);

while($gydytojas) {
    echo "<ul><li>" . "<a href='page-doctor.php?sk=$gydytojas[id]'>"  . $gydytojas['name'] . " " . $gydytojas['lname'] . "</a>" .  "</ul></li>";
    $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
}


// uzduotis 3.2: patobulinti 'uzduotis3',
// kad paspaudus ant gydytojo pavardes   atidarytu page-doctor.php faila

?>


<?php
// uzduotis 3.3:
        // page-doctor.php faile isvesti info apie - paspausta gydytoja:
        // <h3> vardas pavarde numeris </h3>

// HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir page-doctor.php faile su $_GET pasiimti kintamaji








