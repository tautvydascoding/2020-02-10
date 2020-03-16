<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
    <title></title>
    <link rel="stylesheet" href="../css/master.css">
</head>
        <body>
                <header>
                    <nav class="container navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="topnav">
                        <a class=""href="index.php"><b>Pradžia</a>
                        <a href="">Straispniai</a>
                        <a href="kontaktai.php">Kontaktai</a>
                        <a href="../admin/admin.php">Admin</b></b></a>
                    </div>
        </header>
                <!-- Baigiasi virsus -->

    <div class="header-img"></div>
    <?php
     function pre_r($array) {
         echo '<pre>';
         print_r($array);
         echo '<pre>';
     }
      ?>
<main>
    <h1 style="color:green;">Registracija</h1>
    <div class="row justify-content-center">
    <form class="" action="registration.php" method="GET">
        <label for=""> Prisijungimo vardas: </label>
        <input type="text" name="username" value=""> <br><br>
        <label for=""> Slaptazodis: </label>
        <input type="password" name="password" value=""> <br><br>
        <button type="submit" class="btn btn-success" > Registruotis </button>
        </form>
        </div>
</main>

     <aside class="aside""col-3 bg-blue mr-7"><section>
         <div id="Login">
         <h2>Prisijungimas:</h2>
         <form action="" method="post">
         <label><b>Vardas :</b></label>
         <input id="username" name="username" placeholder="vardas" type="text">
         <label><b>Slaptazodis :</b></label>
         <input id="password" name="password" placeholder="**********" type="password"><br><br>
         <input name="submit" type="submit" class="btn btn-success" value=" Prisijungti ">
         </form>
         </div>
     </section>
     <section>
 <form method="get" action="controllers/naujaRegistracija.php">
<button type="submit" class="btn btn-secondary">Registruotis</button>
</form>
     </aside>
     <aside class="float">
       <iframe width="360" height="380" src="https://www.youtube.com/embed/1fjhIWJSxfw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </aside>
</section>

<footer>

              &copy;&nbsp;NBA puslapis

            </footer>
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
      <script type="text/javascript" src="../libs/jQuery/jquery-3.3.1.min.js" ></script>
      <script type="text/javascript" src="../libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
      <!--  mano js pats zemiausias!!!-->
      <script type="text/javascript" src="../master.js"></script>

  </body>
</html>
