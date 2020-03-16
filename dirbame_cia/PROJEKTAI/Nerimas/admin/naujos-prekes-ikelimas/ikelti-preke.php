<?php

include('../../controllers/table.php');
              //
$Pavadinimas = $_GET['Pavadinimas'];
$Kaina = $_GET['Kaina'];
$Nuolaida = $_GET['Nuolaida'];
$Pozicija = $_GET['Pozicija'];
$Kiekis = $_GET['Kiekis'];
createPreke( $Pavadinimas, $Kaina, $Nuolaida, $Pozicija, $Kiekis);
  ?>
