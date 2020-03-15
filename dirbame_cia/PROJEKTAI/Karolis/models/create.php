<?php
include_once ('../includes/database_handler.php');
$createname = $_POST['monster'];
$createchar = $_POST['Characteristics'];
$createloc = $_POST['Location'];
$referrer = $_SERVER['HTTP_REFERER'];

createMonster($createname,$createchar, $createloc);
header ("Refresh: 3;URL='$referrer'");
  echo "$createname<hr>$createchar<hr>$createloc<br> Has been Created!!!";
  exit();

 ?>
