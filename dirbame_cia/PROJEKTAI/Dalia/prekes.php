<?php

  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "root", "parduotuve");
  if (isset($_POST['save_profile'])) {
    // for the database
    $bio = stripslashes($_POST['bio']);
    $bio2 = stripslashes($_POST['bio2']);
    $price = stripslashes($_POST['price']);
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Nuotrauka didesnė negu 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "Toks failas jau yra";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO prekes2 SET profile_image='$profileImageName', bio='$bio', bio2='$bio2', price='$price'";
        if(mysqli_query($conn, $sql)){
          $msg = "Prekė išsaugota";
          $msg_class = "alert-success";
        } else {
          $msg = "Duomenų bazės klaida";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "Klaida įkeliant failą";
        $msg = "alert-danger";
      }
    }
  }
?>
