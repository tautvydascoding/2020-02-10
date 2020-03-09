<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap linkas -->
    
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    
    <title></title>

    <!-- mano CSS failas turi buti VISADA zemiau nei kiti CSS failai
    todel lengviau butu, jei mano CSS failas butu po TITLE -->

    <link rel="stylesheet" href="css/master.css">
</head>
<body>
<?php
session_start();
?>
<nav class="container navbar navbar-expand-lg navbar-dark bg-dark">

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Pradžia <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Apie <span class="sr-only">(current)</span></a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="kontaktai.php">Kontaktai <span class="sr-only">(current)</span></a>
    </li> 
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Search</button>
  </form>
  <form action="registracija-form.php">
      <input class="btn btn-success my-2 my-sm-0 mr-sm-2" type="submit" value="Prisijungti" method="get">
      <input class="btn btn-info my-2 my-sm-0 mr-sm-2" type="submit" value="Registruotis" method="get">
  </form>
</div>
</nav>