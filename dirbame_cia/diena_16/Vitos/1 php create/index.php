<!-- <a href='naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS'> Kurti Nauja</a>
<a href='trintiGydytojas.php?sk=23'> TRINTI </a>


<form class="" action="registracija-form.php" method="get">
<button type="submit" name="button">Naujas</button>
</form> -->

<!-- "<a href='trintiGydytojas.php?sk=$gydytojas[id]'>"."TRINTI"."</a>" -->

<?php
include('models/doctors.php');

echo "Gydytoju sarasas";


while ($gydytojas) {
        echo "<li>"."<a href='page-doctor.php?sk=$gydytojas[id]  '>".$gydytojas['FirstName'].$gydytojas['LastName']."</a>"."</li>";
        $gydytojas = mysqli_fetch_assoc ($visiGydytojaiOBJ) ;
        echo "<a href='trintiGydytojas.php?sk=$gydytojas[id]'>"."TRINTI"."</a>";
echo "<hr />";
    }
