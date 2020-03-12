<?php

if (isset($_SESSION['em'])) {
    echo "<h2>Welcome".$_SESSION['em']."</h2>";
    session_destroy();
    echo "<script>location.href'Pradzia.php'</script>";
}
else {
        echo "<script>location.href'Pradzia.php'</script>";
    }


 ?>
