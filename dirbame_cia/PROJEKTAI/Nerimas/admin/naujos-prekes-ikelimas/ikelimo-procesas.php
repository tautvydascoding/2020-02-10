<?php

session_start();
$mysqli= new mysqli("localhost", "root", "", "puslapis1") or die(mysqli_error($mysqli));

$id = 0;
$atnaujinti = false;
$Pavadinimas = "";
$Kaina = "";
$Nuolaida = "";
$Pozicija = "";
$Kiekis = "";


if (isset($_POST['save'])){
    $Pavadinimas = $_POST['Pavadinimas'];
    $Kaina = $_POST['Kaina'];
    $Nuolaida = $_POST['Nuolaida'];
    $Pozicija = $_POST['Pozicija'];
    $Kiekis = $_POST['Kiekis'];
    $mysqli->query("INSERT INTO prekes (Pavadinimas, Kaina, Nuolaida, Pozicija, Kiekis) VALUES ('$Pavadinimas','$Kaina','$Nuolaida','$Pozicija','$Kiekis')") or die($mysqli->error);

$_SESSION['message'] = "Irasas buvo issaugotas";
$_SESSION['msg_type'] = "Pavyko";
header("Location: visos-prekes.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM prekes WHERE id = '$id' ") or die ($mysqli->error);

$_SESSION['message'] = "Irasas buvo istrintas";
$_SESSION['msg_type'] = "Pavyko";
header("Location: visos-prekes.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $atnaujinti = true;
    $result = $mysqli->query("SELECT * FROM prekes WHERE id = '$id' ") or die ($mysqli->error);
    if($result->num_rows){
        $row = $result->fetch_array();
        $Pavadinimas = $row['Pavadinimas'];
        $Kaina = $row['Kaina'];
        $Nuolaida = $row['Nuolaida'];
        $Pozicija = $row['Pozicija'];
        $Kiekis = $row['Kiekis'];
    }
}

if (isset($_POST['atnaujinti'])){
    $id = $_POST['id'];
    $Pavadinimas = $_POST['Pavadinimas'];
    $Kaina = $_POST['Kaina'];
    $Nuolaida = $_POST['Nuolaida'];
    $Pozicija = $_POST['Pozicija'];
    $Kiekis = $_POST['Kiekis'];

    $mysqli->query("UPDATE prekes SET Pavadinimas='$Pavadinimas', Kaina='$Kaina', Nuolaida='$Nuolaida', Pozicija='$Pozicija', Kiekis ='$Kiekis' WHERE id = '$id' ") or die($mysqli->error);


    $_SESSION['message'] = "Irasas atnaujintas";
    $_SESSION['msg_type'] = "warning";
    header("Location: visos-prekes.php");
}
 ?>
