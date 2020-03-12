<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <?php
    require_once("controllers/zmogus.php");
    $Monika = new Zmogus();
    echo $Monika->getManoVardas();
    $Monika->getManoVardas();
     ?>
    <body>

    </body>
</html>
