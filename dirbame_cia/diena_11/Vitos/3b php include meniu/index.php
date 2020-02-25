

<?php

// include("header.php");
// include("main.php");

?>

<nav>
    <ul>
       <?php
       include('meniu.php');
       for ($i=0; $i < 5 ; $i++) {
           echo "<li>".$meniu[$i]."</li>";
       }
       ?>
    </ul>
</nav>

<?php

// include("footer.php");
