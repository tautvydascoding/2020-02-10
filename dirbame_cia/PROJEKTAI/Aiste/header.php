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
    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
      <input class="input-group input-group-sm mr-sm-2 " type="search" placeholder="Ieskoti" aria-label="Search" name="search">
      <button class="btn btn-outline-success btn-sm my-2 my-sm-0 mr-sm-2" type="submit" name="search-btn">Ieskoti</button>
    </form>
    <form action="prisijungimas-vartorojai-form.php">
      <input class="btn btn-success btn-sm my-2 my-sm-0 mr-sm-2" type="submit" value="Prisijungti" method="post">
    </form>
    <form action="registracija-vartorojai-form.php">
      <input class="btn btn-info btn-sm my-2 my-sm-0 mr-sm-2" type="submit" value="Registruotis" method="post">
    </form>
    <!-- <form action="">
      <input class="btn btn-dark btn-outline-light btn-sm my-2 my-sm-0 mr-sm-2" type="submit" value="Log out" method="post">
    </form> -->
    

</div>
</nav>