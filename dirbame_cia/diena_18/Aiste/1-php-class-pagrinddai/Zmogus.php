<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..."


/**
 *
 */
class Zmogus
{
    public $ugis = 0;
    public $vardas = "bevardis";

    // -- bus paleista automatiskai, kai naudosim NEW zodi
    public function __construct($vard, $ug){
        $this->vardas = $vard;
        $this->ugis = $ug;
        echo "objektas sukurtas sekmingai <br>";
    }

    // public function einu() {
    //       $this->ugis = 155;
    //     echo "Einu einu jau einu";
    // }
}
