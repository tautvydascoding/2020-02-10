<?php
include_once ("header.php");
include_once ('models/prisijungimas.php');
include_once ('models/vartotojai.php');
?>


  <section class="container  tarpas-apacia mt-2">
    <div class="row hight-col">

      <main class="col-3 spalva tarpas-desine bg-dark mr-2">
        <div class="row paddingas"> 
          <a href="komandos.php">Komandos</a>
        </div>
        <div class="row paddingas">
          <a href="tvarkarasciai.php">Tvarkarasciai</a>
        </div>
        <div class="row paddingas">
          <a href="cempionatoLentele.php">Čempionato lentelė</a>
        </div>

      </main>

      <aside class="col spalva">
        <div class="row paddingas">
           <div class="col border border-secondary pb-2">
            <h3>Registruotis</h3>
            <form action="controller/vartotojai-registracija.php" method="post">
              <label for="email">Jusu el pastas</label>
              <input type="text" name="email"  class="form-control" placeholder="El pastas" required> <hr>

              <label for="password">Jusu slaptazodis</label>
              <input type="password" name="password" class="form-control"  placeholder="Slaptazodis" required> <hr>

              <button type="submit"  class="btn btn-primary" > Registruotis </button>
             </form>
            </div>
          </div>
        </aside>
      </div>
  </section>

<?php
include ("footer.php");
?>




    






   



