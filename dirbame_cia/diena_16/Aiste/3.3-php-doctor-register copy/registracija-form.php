<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<h1>Iveskite naujo gydytojo duomenis</h1>
   
<form action="controller/create.php" method="get">
   <label for="name">Jusu vardas</label>
   <input type="text" name="name" placeholder="Vardas"> <hr>
   <label for="lname">Jusu pavarde</label>
   <input type="text" name="lname" placeholder="Pavarde"> <hr>
   <label for="area">Jusu darbo zona</label>
   <input type="text" name="area" placeholder="Zona"> <hr>

   <button type="submit"> Kurti </button>

</form>
</body>
</html>

<?php

// Vartotojui paspaudus "registruotis" mygtuka - ivestus duomenis issaugoti DB.

// SUkurti gydytoju registracijos  forma (pvz: registracija-form.php )
// Vartotojui paspaudus "registruotis" mygtuka - vartotoja perkelti i naujasGydytojas.php faila (HINT: action='registracija.php')

// registracija.php faile:
//    Duomenis paimkite is $_GET ir perduokite i   createDoctor(....) f-ja, taip jums sukurs gydytoja
?>


