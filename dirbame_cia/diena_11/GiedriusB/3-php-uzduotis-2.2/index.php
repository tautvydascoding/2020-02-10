  <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

        <!-- MANO CSS visada pats zemiausias!!! -->
        <link rel="stylesheet" href="css/style.css">
    </head>

      <?php
        $kaina = 299;
        $antraste = "XXL Dviratis";
        $aprasymas = "Geras kalnu dviratis, melynos spalvos";
      ?>

    <body>
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <?php
              for ($i=0; $i < 6; $i++) {
                include("template-preke.php");
              }
             ?>
          </div>
        </div>
      </div>




        <script type="text/javascript" src="libs/jquery-3.4.1.min.js"> </script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js"> </script>
        <!-- MANO JS pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>

     </body>
</html>
