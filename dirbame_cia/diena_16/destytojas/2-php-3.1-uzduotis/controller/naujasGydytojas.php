<?php
// // createDoctor() paleidimas per narsykle
//createDoctor() paleidimas per narsykle per su mygtuku

// 1.1 sukurti PHP faila  naujasGydytojas.php
// 1.2. faile paleisti:
include('../models/doctors.php');
print_r($_GET);
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
$area = $_GET['zona'];
createDoctor($vard, $parv, $area);
// 1.3. Narsykleje nueiti (pamatysite klaida):
    // localhost/ ... /naujasGydytojas.php

// 1.4. Narsykleje nueiti:
    // localhost/ ... /naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS
