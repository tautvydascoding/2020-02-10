<?php

require_once('../controllers/sapnu_gaudykles.php');
$x = $_GET['aa'];
$sapnuGaudykle = getSG($x); // array - sapnu gaudykles duomenis is DB

// print_r($sapnuGaudykle); // test

echo "<h2>Sapnu gaudykle</h2>";
echo "<h3>  $sapnuGaudykle[dydis] <br>  $sapnuGaudykle[spalva] <br>  $sapnuGaudykle[kaina] <br>  $sapnuGaudykle[aprasymas]</h3>";
