<?php

include "header.php";
?>
<section class="container bg-light">
    <div class="row justify-content-center">
        <div class="col-6">
            <br>
            <br>

            <h1 class="text-success text-center" >SUSISIEKIME</h1>
            <br>
            <form action="email.php" method="POST">
                <input type="text" id="vardas" placeholder="Jūsų vardas"name="vardas" class="form-control"><br>
                <input type="email" name ="pastas" placeholder="Jūsų el. paštas" class="form-control" required><br>
        </div>
<section class="container">
    <div class="row justify-content-center">
  <textarea name="klausimas"placeholder="Žinutė" rows="8" cols="80" class="form-control col-6" ></textarea><br>
    </div>
<br>
  <div class="row justify-content-center">
  <button type="submit" value="Submit" class="btn btn-secondary col-1">Siųsti<br>

      </div>
      <br>
      <br>
      <br>



</form>

</section>

</section>
</header>
<?php include "footer.php"; ?>
