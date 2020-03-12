<?php
include ("header.php");
include ('models/prisijungimas.php');
include ('models/kontaktai.php');
?>


<section class="container  tarpas-apacia mt-2">
    <div class="row hight-col">

        <main class="col-3 spalva tarpas-desine bg-dark mr-2">
                <div class="row paddingas"> 
                    <a href="komandos.php">Komandos</a>
                </div>
                <div class="row paddingas">
                    <a href="tvarkarasciai.php">Tvarkarasciai</a>
                </div>
                <div class="row paddingas">
                    <a href="cempionatoLentele.php">Čempionato lentelė</a>
                </div>

            </main>

            <aside class="col spalva">
                <div class="row paddingas">
                    <form  action="email.php" method="post">
                        <input type="text" name="vardas" placeholder=" Jusu vardas"  value="" > <br>
                        <input type="text" name="pastas" placeholder=" Jusu email"  value="" > <br>
                        <input type="text" name="sritis" placeholder=" Sritis"     value="" > <br>
                        <textarea name="klausimas" rows="4" cols="40" placeholder=" Klausimai" ></textarea><br>
                        <input type="submit" value="Klausti" class="btn btn-dark">
                    </form>
                </div>
             
            </aside>
        </div>
    </section>

<?php
include ("footer.php");
?>




    





