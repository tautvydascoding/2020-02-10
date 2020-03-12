<?php

include "header.php";
?>
<section class="container bg-light">
    <div class="row">
        <div class="col-3">

            <h1 class="text-success" >Susisiekime</h1>
            <br>
            <form action="email.php" method="POST">
                <input type="text" id="vardas" placeholder="Jūsų vardas"name="vardas" class="form-control"><br>
                <input type="email" name ="pastas" placeholder="Jūsų el. paštas" class="form-control" required><br>
        </div>
<section class="container">
    <div class="row">
  <textarea name="klausimas"placeholder="Žinutė" rows="8" cols="80" class="form-control col-7" ></textarea><br>
    </div>
<br>
  <div class="row">
  <button type="submit" value="Submit" class="btn btn-secondary col-1">Siųsti<br>
      </div>
</form>

</section>

</section>
</header>
<?php include "footer.php"; ?>
