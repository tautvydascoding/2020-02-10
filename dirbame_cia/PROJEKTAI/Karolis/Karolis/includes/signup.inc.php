<?php
if (isset($_POST['signup-submit'])) {

require_once 'database_handler.php';

$username = $_POST["Username"];
$email = $_POST['mail'];
$password = $_POST["password"];
$passwordRepeat = $_POST["password-repeat"];

if (empty($username) ||empty($email) || empty($password) || empty($passwordRepeat)) {
header("Location: ../signup.php?error=emptyfields&Username=".$username."&mail=".$email);
exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invalidmailUsername");
    exit();

  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&Username=".$username );
    exit();
  }
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
  header("Location: ../signup.php?error=invalidUsername&mail=".$email);
  exit();
  }
  else if ($password !== $passwordRepeat) {
    header("Location: ../signup.php?error=passwordcheck&username=".$username."&mail=".$email);
    exit();
  }
  else {

    $sql = "SELECT idUsers FROM users WHERE idUsers=? AND passwordUsers=?";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt,$sql )) {
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
else {
  mysqli_stmt_bind_param($stmt, "ss",$username, $password);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);
  $resultCheck = mysqli_stmt_num_rows();
  if ($resultCheck> 0) {
    header("Location: ../signup.php?error=usertaken&mail=".$email);
    exit();
  }
  else {
    $sql = "INSERT INTO users  (userNameUsers,emailUsers,passwordUsers) VALUES  (?, ?, ?)";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt,$sql )) {
      header("Location: ../signup.php?error=sqlerror");
      exit();

  }
  else {
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss",$username,$email,$hashedPassword);
    mysqli_stmt_execute($stmt);
    header("Location: ../signup.php?signup=success");
    exit();
  }
  }
}
  }
}
mysqli_stmt_close($stmt);    // baigiu statementa
mysqli_close($connection);   //atsijungiu nuo data-base
