<?php
include_once ('../includes/database_handler.php');
$updateID = $_POST['id'];
$updateName = $_POST['monster'];
$updateChar = $_POST['Characteristics'];
$updateLoc = $_POST['Location'];
$referrer = $_SERVER['HTTP_REFERER'];


editMonsters($updateID, $updateName, $updateChar, $updateLoc);
  header ("Refresh: 3;URL='$referrer'");
    echo "$updateID<hr>$updateName<hr>$updateChar<hr>$updateLoc<hr> Has been Created!!!";
    exit();


 ?>
