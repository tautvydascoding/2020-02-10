<?php
// session_start();


include('../controllers/table.php');
              //
$username = $_GET['username'];
$password = $_GET['password'];
createRegistracija( $username, $password);
  ?>
