<?php
require_once 'database_handler.php';


 // print_r($_GET);


 // echo "Labas <br> $_GET[vardas]" . "<br> $_GET[pavarde] <br> $_GET[tel] <hr> ";
 // getDoctorByName($_GET['vardas']);
 $monster = getMonsterByName($_POST['monster']);
 // print_r ( $gydytojas);   //test
 // echo " daktaro pavarde yra: " . $gydytojas["lastname"];

 // $url = "https://google.com";
 if ($monster != null) {
   ?>
   <article class = "">
     <h2><?php echo $monster['Name']."<hr>".$monster['Characteristics']."<hr>".$monster['Location']; ?></h2>
</article>
<?php
   // print_r($monster1);
   // echo "array key exists";
 }else {


   echo "Such monster doesnt exist in database" . "<br> Redirecting to google search in 3....2....1......";
   ?>
   <script type="text/javascript">
   var val = "<?php echo $_POST['monster'] ?>";
   setTimeout(function () {
      window.location.replace("https://google.com?q=" + val); // the redirect goes here

   },3000);
   // window.location.replace("https://google.com?q=" + val);

   </script>
   <?php

 }
