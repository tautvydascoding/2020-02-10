<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
        <title></title>
    </head>
    <body>



    <header>
        <div class="container bg-light">



            <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">PRADŽIA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="kontaktai.php">KONTAKTAI<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="registration/login.php">PRISIJUNGTI<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="registration/register.php">REGISTRUOTIS<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="pardavejai_crud/crud.php">ADMIN<span class="sr-only">(current)</span></a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" name="srch" id="srch" list="prekiuSarasas" placeholder="Įveskite prekę" aria-label="Search">
          <datalist id="prekiuSarasas">
  <option value="Skalbykle LG">
  <option value="Kompiuteris Apple">
  <option value="Kompiuteris Lenovo">
  <option value="Kompiuteris Asus">
  <option value="Televizorius Sony">
  <option value="Televizorius Samsung">
  <option value="Televizorius Philips">
  <option value="Skalbyklė Bosh">   
</datalist>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ieškoti</button>
        </form>
      </div>
    </nav>
    <hr>
</div>
