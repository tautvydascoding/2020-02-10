<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>

        <div class="container">


            <div class="row justify-content-center">
            <form class="" action="prekes-ikelimas.php" method="GET">
                <div class="form-group">
                <label for=""> Prekes dydis </label>
                <input type="text" name="dydis" class="form-control" value="">
                </div>
                <div class="form-group">
                <label for=""> Prekes spalva </label>
                <input type="text" name="spalva" class="form-control" value="">
                </div>
                <div class="form-group">
                <label for=""> Prekes kaina </label>
                <input type="text" name="kaina" class="form-control" value="">
                </div>
                <div class="form-group">
                <label for=""> Prekes aprasymas </label>
                <input type="text" name="aprasymas" class="form-control" value="">
                </div>
                <input type="submit" name="" class="btn btn-primary" value="Prideti preke">
            </form>
            </div>
        </div>
        <!-- Scriptai FAILO dugne -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
        <!--  mano js pats zemiausias!!!-->
        <script type="text/javascript" src="master.js"></script>

    </body>
</html>
