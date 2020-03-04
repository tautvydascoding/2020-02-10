
        <?php
require_once("controller/zmogus.php");

$Monika = new zmogus();
// echo $Monika->vardas;  visada EROR nes private
// issaukiam public f-ja getManoVardas()

echo $Monika->getManoVardas() . "<br />"; //bvevarde
$Monika->setManoVardas("Monika");
echo $Monika->getManoVardas() . "<br />"; //Monika
echo $Monika->getManoUgis() . "<br />";
$Monika->setManoUgis(170);
echo $Monika->getManoUgis() . "<br />";


     ?>
