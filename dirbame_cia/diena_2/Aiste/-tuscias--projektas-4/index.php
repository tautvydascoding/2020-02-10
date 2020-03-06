<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>

        <div class="container">
            <header class="row">
                <div class="col-md-12">
                    <h1> Isijunk Inspect Element->console </h1>
                </div>
            </header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

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



<header class="container tarpas-apacia tarpas-virsus">
    <nav class="row ">
        <div class="col-2 spalva paddingas tarpas-desine">
            <a href="index.php">Pradžia</a>
        </div>
        <div class="col-2 spalva paddingas tarpas-desine">
            <a href="">Apie</a>
        </div>
        <div class="col-2 spalva paddingas tarpas-desine">
            <a href="kontaktai.php">Kontaktai</a>
        </div>
        <div class="col-3 spalva paddingas tarpas-desine">
            <input type="search" placeholder="search">
        </div>
        <div class="col spalva paddingas">
            <form action="registracija-form.php">
                <input type="submit" value="Prisijungti" method="get">
                <input type="submit" value="Registruotis" method="get">
            </form>
        </div>
    </nav>
</header>

        </div>
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
