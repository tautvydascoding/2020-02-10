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

//sitas bus paleistas automatiskai kai naudosim zodi new = Zmogus ()
public function __construct($vard, $ug){
    $this->ugis = $ug;
    $this->vardas = $vard;
    echo "objektas sukurtas sekmingai <br />";

}

    public function einu() {
        echo "Einu einu jau einu";
    }
}
