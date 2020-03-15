<?php
session_start();
include_once ('../includes/database_handler.php');
$DeleteID = $_POST['id'];
$referrer = $_SERVER['HTTP_REFERER'];

$DeleteID = $_POST['id'];
$ajaxDelete = deleteMonster($DeleteID);
echo json_encode($ajaxDelete);

$_SESSION["newsession"]="Your monster ID has been Deleted!!";
if (isset($_SESSION["newsession"])) {
  echo $_SESSION["newsession"];
}

header('Location:  ../index.php');

exit();
// deleteMonster($DeleteID);
// header ("Refresh: 3;URL='$referrer'");
// echo "Monster ID $DeleteID has been Deleted!!";
 ?>
