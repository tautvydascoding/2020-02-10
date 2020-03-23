<?php

if (isset($_POST['login-submit'])) {
  require 'database_handler.php';
  $mailuid = $_POST['mailuid'];
  $password = $_POST['password'];

  if (empty($mailuid) || (empty($password))) {
    print_r ($_POST);
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE userNameUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $password, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $passwordCheck = password_verify($password, $row['passwordUsers']);
        if ($passwordCheck == false) {
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }
        else if ($passwordCheck == true) {
          session_start();
          $_SESSION['userId'] = $row['idUsers'];
          $_SESSION['userUid'] = $row['userNameUsers'];
          if ($_SESSION['userId'] == '1') {
            session_start();
            $_SESSION['admin'] = true;
            }
          header("Location: ../index.php?login=success");
          exit();

      }
        else {
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }
      }else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}
else {
  header("Location: ../index.php");
  exit();
}
