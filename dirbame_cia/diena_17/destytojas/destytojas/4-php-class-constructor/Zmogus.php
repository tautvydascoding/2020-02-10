<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: private ugis, private vardas
// f-ja 'getUgis()
// f-ja 'getVardas()
// f-ja 'setUgis($x)
// f-ja 'setVardas($x)


/**
 *
 */
class Zmogus
{
    private $ugis = 0;
    private $vardas = "bevardis";
    public function __construct( $vardas='bevardis', $ugis='-999') {
        $this->ugis = $ugis;
        $this->vardas = $vardas;
    }
    public function getUgis() {
        return  $this->ugis;
    }
    public function setUgis($x) {
           $this->ugis = $x;
    }
}






//
