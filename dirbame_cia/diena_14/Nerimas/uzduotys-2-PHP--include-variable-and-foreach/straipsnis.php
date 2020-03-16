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



<?php

echo $vardas . $pavarde . "<br>";

?>
 <div class="container">

 </div>

<main>

</main>

<article>
    <h2><?php echo $straipsnis[0]; ?> </h2>
    <p><?php echo $straipsnis[1]; ?> </p>

</article>

<div>
    <?php echo $straipsnis[2]; ?>
</div>




 <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
 <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
 <!--  mano js pats zemiausias!!!-->
 <script type="text/javascript" src="master.js"></script>

</body>
</html>
