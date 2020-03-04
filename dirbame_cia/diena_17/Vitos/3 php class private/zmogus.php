<?php
class Zmogus {
    private $vardas = "Bevardis";
    private $ugis = "0";


// set ir get f-jos ugis
public function getManoUgis() { return $this->ugis; }
public function setManoUgis($x)  { $this->ugis = $x;  }
// x naudojamas vietoje $ tuo paciu vardu

// set ir get f-jos vardas
public function getManoVardas() { return $this->vardas; }
public function setManoVardas($vardas)  { $this->vardas = $vardas;  }
}
