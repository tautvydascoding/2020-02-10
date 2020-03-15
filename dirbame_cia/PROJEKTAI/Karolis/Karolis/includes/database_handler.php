<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "monstrai";


$connection = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if (!$connection) {
die("Connection failed: " .mysqli_connect_error());
}
function getConnection() {
    // isvardini globalius kint. kuriuos nori naudoti f-jos viduje
    global $connection; // !! sioje eilute, globaliu kint. negalima keisti, bet zemiau galima
    return $connection;
}
function deleteMonster($nr) {
    $mysql = "DELETE FROM monstrai WHERE id = '$nr'  LIMIT 1";
    $ifsuccess = mysqli_query( getConnection(),  $mysql  );
    if ( $ifsuccess == false) {   // !$arPavyko
        echo "ERROR nepavyko atleisti gydytojo nr: $nr <br>";
    }
}
function createMonster($Name, $Characteristics, $Location) {
    $mysql = "INSERT INTO  monstrai VALUES( NULL, '$Name', '$Characteristics', '$Location' )";
    $ifsuccess = mysqli_query( getConnection(),  $mysql  );
    if ( $ifsuccess == false) {   // !$arPavyko
        echo "ERROR nepavyko sukurti gydytojo vardas: $Name, $Characteristics, $Location <br>";
    }
}
function addMissingName($Name) {
    $mysql = "INSERT INTO  monstrai VALUES( NULL, '$Name')";
    $ifsuccess = mysqli_query( getConnection(),  $mysql  );
    if ( $ifsuccess == false) {   // !$arPavyko
        echo "ERROR nepavyko dadeti trukstamo vardo: $Name <br>";
    }
}
function editMonsters($nr, $Name, $Characteristics, $Location) {
    $mysql = "UPDATE  monstrai SET
                                    Name= '$Name',
                                    Characteristics = '$Characteristics',
                                    Location = '$Location'
                                WHERE ID = '$nr'
                                LIMIT 1
                ";
    $ifsuccess = mysqli_query( getConnection(),  $mysql  );
    if ( $ifsuccess == false) {   // !$arPavyko
        echo "ERROR nepavyko redaguoti gydytojo nr:$nr, $Name, $Characteristics, $Location <br>";
    }
}
function getMonster( $monster ) {
    $mysql = "SELECT * FROM monstrai  WHERE Name = '$monster';  ";
    // $rezultataiOBJ -  Mysql Objektas
    $resultOBJ = mysqli_query(getConnection(), $mysql);
    // ar radom gydytoja
    if (mysqli_num_rows($resultOBJ) > 0) {
        // print_r( $rezultataiOBJ ); // test
        // is Objekto paimam viena eilute ir paverciam i asociatyvu array
        $resultARRAY = mysqli_fetch_assoc( $resultOBJ  );
        // print_r($resultARRAY); // test
        return $resultARRAY;
    } else {
        echo "Atleiskite , tokio gydytojo nera";
        return NULL;
    }

}

function getMonsterByName( $Name ) {
    $mysql = "SELECT * FROM monstrai  WHERE Name = '$Name';  ";
    // $rezultataiOBJ -  Mysql Objektas
    $resultOBJ = mysqli_query(getConnection(), $mysql);
    // ar radom gydytoja
    if (mysqli_num_rows($resultOBJ) > 0) {
         // print_r( $resultOBJ ); // test
        // is Objekto paimam viena eilute ir paverciam i asociatyvu array
        $resultARRAY = mysqli_fetch_assoc( $resultOBJ  );
        // print_r($resultARRAY); // test
        return $resultARRAY;
    } else {
        // echo "Atleiskite , tokio gydytojo nera";
        return NULL;
    }
}
function getMonsters(){
    $mysql = "SELECT * FROM monstrai";
      $resultOBJ = mysqli_query(getConnection(), $mysql);
      return $resultOBJ;
}
$allMonsters = getMonsters();
$monster1 = mysqli_fetch_assoc($allMonsters);

function getFotos() {
    $mysql = "SELECT * FROM monstru_img
    INNER JOIN monstrai
    ON monstru_img.monstrai_id=monstrai.ID";
    $resultOBJ = mysqli_query(getConnection(), $mysql);
    return $resultOBJ;
    }

$allMonstersFotos = getFotos();
$monsterfotos = mysqli_fetch_assoc($allMonstersFotos);


 // if(isset($_POST["mysql"]))
 // {
 //      $output = '';
 //      $mysql = "SELECT * FROM monstrai WHERE monstrai LIKE '%".$_POST["mysql"]."%'";
 //      $result2 = mysqli_query(getConnection(), $mysql);
 //      $output = '<ul class="list-unstyled">';
 //      if(mysqli_num_rows($result) > 0)
 //      {
 //           while($row = mysqli_fetch_array($result))
 //           {
 //                $output .= '<li>'.$row["country_name"].'</li>';
 //           }
 //      }
 //      else
 //      {
 //           $output .= '<li>Country Not Found</li>';
 //      }
 //      $output .= '</ul>';
 //      echo $output;
 // }
 ?>
