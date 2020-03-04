<?php

class Zmogus{
    private $ugis = 0;
    private $vardas = "bevarde";
    public function getManoUgis(){ return $this->ugis; }
    public function getManoVardas(){ return $this->vardas; }
    public function setManoUgis($x) { $this->ugis = $x; }
    public function setManoVardas($x) { $this->vardas = $x; }
}

 ?>
