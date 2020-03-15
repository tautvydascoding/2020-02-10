<?php
include('Header.php');
 ?>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->

<?php
include('Navigacija.php');
session_start();

// echo "<div class= 'bg-warning'>".$_SESSION['zinute']."</div>";
//  $_SESSION['zinute'] = "";

 ?>
<!-- =========== -->
  <!-- <?php
  if (isset($_SESSION['em'])) {
      echo "<h2>Welcome".$_SESSION['em']."</h2>";
      echo "<a href='../logout.php'><input type='button' name='logout' value='logout'></a>";
  }
  else {
      echo "<script>location.href'adminFiles.php'</script>";
  }

  ?> -->
  <!-- =============== -->
                <!-- ++++++++++++++++++++++++++++++++++++- -->

                <main class="col aukstis-300 bg-light">
                    <h1>Pagrindinis</h1>
                    <?php
                    echo "<div class= 'bg-warning'>".$_SESSION['zinute']."</div>";
                     $_SESSION['zinute'] = "";
                     ?>
                    <br />

                    <?php
                    include('models/funkc-apie.php');

                    $visiTeigApiemusOBJ =  getApiemus();
                    $teiginys = mysqli_fetch_assoc($visiTeigApiemusOBJ);
                    while($teiginys) {
                        echo "<h3>". $teiginys['mintis']."</h3>";
                        $teiginys = mysqli_fetch_assoc($visiTeigApiemusOBJ);
                    }

// $_SESSION['zinute'] =  "sesijos";
                     ?>

                </main>
                <!-- ================     -->
        </section>

        <!-- =================================== -->

<?php
include('Footer.php');
?>
