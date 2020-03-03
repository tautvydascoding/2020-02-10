<?php


/**
 *
 */
class Zmogus
{
    private $vardas = "bevardis";
    private $ugis = 0;
    // public f-ja 'getManoUgis()'
    // public f-ja 'getManoVardas()'
    // public f-ja 'setManoUgis($x)'
    // public f-ja 'setManoVardas($x)'
    public function getManoUgis() {       return $this->ugis;   }
    public function getManoVardas() {     return $this->vardas;   }
    public function setManoUgis($x) {      $this->ugis = $x;   }
    public function setManoVardas($x) {     $this->vardas = $x;   }
}


 ?>
