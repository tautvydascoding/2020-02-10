<?php
require_once "header.php";
require_once "models/create_cookies.php";
 ?>



 <main>
   <div class="wrapper-main">
     <section class="section-default">
       <?php
       if (isset($_SESSION['userId'])) {
        echo  '<p class="login-status"> You are logged in! </p>';
       }
       else {
         echo  '<p class="login-status"> You are logged out! </p>';
       }
        ?>

      </section>
    </div>

  </main>
  <div class="search">
    <?php
    echo '<p class="search"> You can google search here!</p>';
      ?>
  </div>

 <?php
require "footer.php";
if (isset($_SESSION["newsession"])) {
  echo $_SESSION["newsession"];
}
  ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
