<?php

include("../models/prekes.php");
$visosZvakes = getZvakes();

$zvakes = mysqli_fetch_assoc( $visosZvakes  );

while($zvakes){
    echo "<h3>". "<br>" . $zvakes['pavadinimas']. "<br>" . $zvakes['kaina']."</h3>";
        $zvakes =mysqli_fetch_assoc($visosZvakes);
}




 ?>
