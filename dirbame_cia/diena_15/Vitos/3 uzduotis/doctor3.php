
<?php
include('models/doctors.php');
// $gydytojas = getDoctor (11);
// print_r($_GET);

// truksta dalies is idejos.txt
//  spausdina <p.> su norimu id...




echo "Gydytoju sarasas";


while ($gydytojas) {
        echo "<li>"."<a href='page-doctor.php?sk=$gydytojas[id]  '>".$gydytojas['FirstName'].$gydytojas['LastName']."</a>"."</li>";
        $gydytojas = mysqli_fetch_assoc ($visiGydytojaiOBJ);
    }



?>

<?php

// $numeris = $_GET['nr'];
// print_r($_GET);
// $gydytojas = getDoctor( $numeris); // klaida f-jos vardas
// echo $gydytojas["FirstName"] . $gydytojas['LastName'] ;
