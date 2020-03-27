<?php  session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="../css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>
    <div class="contacts-info">

        <h2>Candle For Our Home ™ </h2>
        <h3> Kontaktai:</h3>
        <h4>Tel. nr. : +37069916709<br />
            El. paštas : candleforourhome@gmail.com<br />
            Instagram : @candleforour<br />
            Facebook: <a href="https://www.facebook.com/Candle-For-Our-Home-1882569828458313/">Our Facebook!</a><br /></h4>
        </div>
         <form class="contacts-form" action="../includes/email.php" method="post">
             <h1>Atsiliepimus siuskite čia.</h1>
               <input type="text" name="vardas" placeholder="Jusu vardas" > <br>
               <input type="text" name="email" placeholder="jusu email" required  > <br>
               <input type="text" name="tema" placeholder="tema"  > <br>
               <textarea name="klausimas" rows="8" cols="80"placeholder="jusu klausimas" required>

                </textarea><br>

             <input  class="btn btn-primary"type="submit" value="Klausti"><br /><br />
             <a href="../index.php" class="btn btn-primary" type="button" name="atgal">Gryžti</a>
        </form>
<?php require "../footer.php" ?>
     </body>
</html>
