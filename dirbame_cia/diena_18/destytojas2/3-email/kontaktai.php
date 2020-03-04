<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Kontaktu puslapis</h1>

        <h2> Klauskite </h2>
        <form  action="email.php" method="GET">
            <input type="text" name="vardas" placeholder="jusu vardas" > <br>
            <input type="email" name="elpastas" placeholder="jusu el. pastas" required><br>
            <textarea name="klausimas" rows="8" cols="80"  >
                    Jusu klausimas
             </textarea> <br>

             <button type="submit" >  Klauskite</button>
        </form>

    </body>
</html>
