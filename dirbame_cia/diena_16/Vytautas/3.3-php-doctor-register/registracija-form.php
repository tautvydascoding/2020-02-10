<!-- Vartotojui paspaudus "registruotis" mygtuka - ivestus duomenis issaugoti DB.

SUkurti gydytoju registracijos  forma (pvz: registracija-form.php )
Vartotojui paspaudus "registruotis" mygtuka - vartotoja perkelti i
naujasGydytojas.php faila (HINT: action='registracija.php')

registracija.php faile:
   Duomenis paimkite is $_GET ir perduokite i   createDoctor(....) f-ja,
   taip jums sukurs gydytoja -->

<form class="" action="registracija.php" method="GET">
    <label for=""> Jusu vardas </label>
    <input type="text" name="name" value=""> <br><br>
    <label for=""> Jusu pavarde </label>
    <input type="text" name="Lname" value=""> <br><br>
    <label for=""> Jusu zona </label>
    <input type="text" name="area" value=""> <br><br>
    <input type="submit" name="" value="Register">
</form>
