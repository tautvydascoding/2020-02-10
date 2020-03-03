<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once("zmogus.php");
            $Monika = new Zmogus();
            // echo $Monika->vardas; // !!! ERROR neiseis paimti private kint.
            // BEt galim issaukti public f-ja getManoVardas()
            echo   $Monika->getManoVardas(). "<BR>"; // bevarde
            $Monika->setManoVardas("Monika");
            echo   $Monika->getManoVardas(). "<BR>"; // Monika

            echo   $Monika->getManoUgis() . "<BR>"; // 0
            $Monika->setManoUgis(150) ;
            echo   $Monika->getManoUgis() . "<BR>"; // 150
         ?>
    </body>
</html>
