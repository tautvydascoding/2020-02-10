<?php
include('controllers/login.php');
if(isset($_SESSION['login_user'])){
}
include('header.php');
?>
<body>
    <script>
    function myFunction() {
      alert("Hello! I am an alert box!");
    }
    </script>
<header>
    <nav class="container navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="topnav">
      <a class=""href="index.php"><b>Pradžia</a>
      <a href="">Straispniai</a>
      <a href="kontaktai.php">Kontaktai</a>
      <a href="admin/admin.php">Admin</b></b></a>
    </div>

</header>
<script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script>
<section>
    <img src="https://mcfarlane.com/wp-content/uploads/2018/03/NBA_Header.jpg" alt="Nba nuotrauka" height="400" width="100%">
</section>
                <section>

                  <main>

                    <article class="float">
                      <h2>NBA sezonas sustabdytas</h2>
                      <p>NBA patikslino, jog sezonas yra sustabdomas artimiausioms 30 dienų. Praėjus šiam laikotarpiui, bus dar kartą svarstoma, ką toliau daryti su sezonu.</p>
                      <img src="img/89767103_10159598538759056_1960551750561693696_n.jpg" alt="NBA">

                    </article>

                  </main>
                  <!-- darom sona -->
                  <aside class="aside" "col-3 bg-dark mr-7">
                  <section>
                      <div id="Login">
                      <h2>Prisijungimas:</h2>
                      <form action="" method="post">
                      <label><b>Vardas :</b></label>
                      <input id="username" name="username" placeholder="vardas" type="text">
                      <label><b>Slaptazodis :</b></label>
                      <input id="password" name="password" placeholder="**********" type="password"><br><br>
                      <input name="submit" type="submit" class="btn btn-success" value=" Prisijungti ">
                      <span><?php echo $error; ?></span>
                      </form>
                      </div>
              <form method="get" action="controllers/naujaRegistracija.php">
    <button type="submit" class="btn btn-secondary">Registruotis</button>
</form><br />

                  <!-- <aside class="float"> -->
                    <iframe width="360" height="380" src="https://www.youtube.com/embed/1fjhIWJSxfw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </aside>
            </section>

            <!-- Baigiasi sekcija (mainas ir sonas) -->

              <footer>

                &copy;&nbsp;NBA puslapis

              </footer>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
