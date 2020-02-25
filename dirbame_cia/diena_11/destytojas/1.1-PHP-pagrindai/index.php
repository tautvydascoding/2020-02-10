
<h1> ANtraste </h1>
$x = 50;

<?php

    $x = 90;
    // isvedimas i HTML faila (ekrana)
    echo "Labas";
    echo " x reiksme: $x <br>";
    print( "Labas, x reiksme $x <br>"); // f-ja

  // komentarai
  /*
        ilgas
        komentaras
    */
    $x = 10;
    $vardas = "Tomas";
    $arVeges = true; // false, 1, 0
    $vaikai = [];  // modernus
    $masinos =  array(  ); // senovinis

    // kintamuosius galima naudoti tekste
    $tekstas = "Ilga istorija apie $vardas";
    // !!! bet '' kab. neveiks
    $tekstas = 'Ilga istorija apie $vardas';
    // '\' ignoruoja sekancio simbolio savybes
    $tekstas = "Ilga istorija apie \$vardas";
    $tekstas = "Ilga istorija apie \"Lietuva\"  ";

    // teskto jungimas
    $testas2 = "Pradzia " . $tekstas . "<br>"; // '.' vieoj '+'
    //
