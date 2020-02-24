<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

        <!-- MANO CSS visada pats zemiausias!!! -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <!--
    1. index.php faile sukurti HTML form'a naudojant metoda (GET)
     ir  su ivedimo laukais (ivedimo laukams nustatyti name='vardas...'):
     vardas, pavarde, telefonas, mygtukas 'registruotis'

    2. kai paspaudzia 'registruotis',
     vartotoja perkelti i registracija.php faila
     (formoje action='registracija.php')

    3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti vartotojo ivestu duomenis
    pvz.:
    print_r( $_GET);

    // PASIBANDYTI PAPILDOMAI
    pvz.: print_r( $GLOBALS)

    // UZDUOTIS
    // pasisveikinti su katik uzsiregistravusius zmogumi ir
    // graziai atspausdinti uzsiregistravusio zmoguas duomenis
    -->
<div class="container  bg-light">
     <h1>Registracija</h1>
     <form  action="registracija.php" method="get">
         <input type="text" name="vardas" placeholder="jusu vardas"> <br>
         <input type="text" name="pavarde"  placeholder="jusu pavarde"> <br>
         <input type="text" name="telefonas"  placeholder="jusu telefonas"> <br>

         <button type="submit" >  Registruotis </button>
     </form>

</div>




        <script type="text/javascript" src="libs/jquery-3.4.1.min.js"> </script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js"> </script>
        <!-- MANO JS pats zemiausias -->
        <script type="text/javascript" src="js/main.js"></script>

     </body>
</html>
