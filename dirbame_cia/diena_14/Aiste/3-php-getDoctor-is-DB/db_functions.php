<?php

// 2. parasysi PHP faile mysqli prisijungima prie DB

define('DB_HOST', 'localhost');
define('DB_MYSQL_USER', 'root');
define('DB_MYSQL_PASSWORD', 'root');
define('DB_NAME', 'hospital2');

$prisijungimas = mysqli_connect( DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME, 3307 );

if ( $prisijungimas) {
    echo "pavyko prisijungti <br>";
} else {
    echo "ERROR";
}


function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)

// UZDUOTIS 1.1: susikurti nauja projekta ir issivesti gydytoja is DB naudojant foreach ir getDoctor($nr) f-ja
function getDoctor($nr) {
    $manoSQL = " SELECT * FROM doctors WHERE id= '$nr' ; " ;
    $rezultataiOBJ = mysqli_query( getPrisijungimas(), $manoSQL );

    if ( mysqli_num_rows( $rezultataiOBJ) > 0) {
        $rezultARRAY = mysqli_fetch_assoc (
            $rezultataiOBJ );
            return $rezultARRAY;
    } else {
        echo "Tokio gydyrojo nera";
        return NULL;
    }
}


// UZDUOTIS 1.2:
// be foreach atspausdinti visa gydytojo info
// <h2> <em>nr</em> vardas pavarde</h2>

$gyd1 = getDoctor(1);
print_r($gyd1);


// UZDUOTIS 1.3:
// su kokiu nors ciklu atspausdinti VISUS gydytojus
// <h2 class='bg-info   m-1'> vardas pavarde</h2>



function getDoctors() {
    $manoSQL = " SELECT * FROM doctors  " ;
    // $rezultataiOBJ - Mysql Objektas
    $rezultataiOBJ = mysqli_query(getPrisijungimas(), $manoSQL );
    return $rezultataiOBJ;
}

$visiGydytojaiOBJ = getDoctors();
$gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);

?> 

<div class="container"> 
    <div class="row"> <?php
        while($gydytojas) {
        include  ('template-item.php');
         $gydytojas = mysqli_fetch_assoc($visiGydytojaiOBJ);
} ?>
    </div>
</div>


<?php

// UZDUOTIS 1.3.2
// A) sukurti nauja nauja faila, pvz:  template-item.php
// B)  perkelti dizaina is index failo ciklo (1.3) (visa h2 eilute):
//     <h2 class='bg-info   m-1'> vardas pavarde</h2>
//       i   faila  template-item.php

// C)    index failo cikle (1.3) ideti: (' template-item.php');
//       
//  papildomai)  template-item.php   faile uzdeti klases 'col-md-4  m-1'
//           virs ciklo uzdeti klase 'row' ir po ciklu uzdaryti