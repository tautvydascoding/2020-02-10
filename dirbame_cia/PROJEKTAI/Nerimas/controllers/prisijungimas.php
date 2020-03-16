<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', '');
define('DB_NAME', 'puslapis1');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME);
if ($prisijungimas) {
    echo "pavyko prisijungti prie DB <br>";
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error($prisijungimas);
}

 function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}
?>
