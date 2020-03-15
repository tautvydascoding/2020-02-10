<?php

// prisijungimas prie duomenu bazes
define('DB_HOST', 'localhost');
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', '');
define('DB_NAME', 'medienos');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME);

if ($prisijungimas) {
    // echo "pavyko prisijungti prie DB ";
} else {
    echo "ERROR: nepavyko prisijungti prie DB:" ;
}

function getPrisijungimas(){
    global $prisijungimas;
    return $prisijungimas;
}
getPrisijungimas();

// ===========================================================
