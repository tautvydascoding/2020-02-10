<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'


// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'getManoUgis()'
// public f-ja 'getManoVardas()'
// public f-ja 'setManoUgis($x)'
// public f-ja 'setManoVardas($x)'
//* kintamojo paemimas f-je:    $this->vardas

class zmogus {
    private $ugis = 999;
    private $vardas = "bevardis";
    public function getManoUgis() {
        return $this->ugis;
    }
    public function getManoVardas() {
        return $this->vardas;
    }
    public function setManoUgis($ugis2) {
        $this->ugis = $ugis2;
    }
    public function setManoVardas($vardas2) {
        $this->vardas = $vardas2;
    }
}
