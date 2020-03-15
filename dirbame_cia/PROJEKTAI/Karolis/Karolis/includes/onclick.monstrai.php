<?php
require_once 'database_handler.php';
 ?>

<main>
  <?php

    // $monster1 = getMonster($_POST['monster']);
      // while($monster1){
      //   echo $monster1['ID']." ".$monster1['Name']."||".$monster1['Characteristics']."||".$monster1['Location'].'<br>';
      //   $monster1 = mysqli_fetch_assoc($allMonsters);
      //
      // }
      // $monsterfotos = getFotos($_POST['monster']);
      // while ($monsterfotos) {
      //   echo  "<img width='30%' src='../img/$monsterfotos[Nuotrauka]' alt=''>";
      //   $monsterfotos = mysqli_fetch_assoc($allMonstersFotos);
      // }
      if ($monster1['ID']||$monsterfotos['monstrai_id']) {
        while ($monster1['ID']=$monsterfotos['monstrai_id']) {
        echo  "<img width='200px' src='../img/$monsterfotos[Nuotrauka]'>".'<br>'.$monster1['ID']." ".$monster1['Name']."||".$monster1['Characteristics']."||".$monster1['Location'].'<br>';
        $monsterfotos = mysqli_fetch_assoc($allMonstersFotos);
          $monster1 = mysqli_fetch_assoc($allMonsters);
        // while($monsterfotos) {
        //     echo  "<img width='100px' src='../img/$monsterfotos[Nuotrauka]' alt=''>";
        //     $monsterfotos = mysqli_fetch_assoc($allMonstersFotos);
        // }
        }
  }


 ?>

</main>
