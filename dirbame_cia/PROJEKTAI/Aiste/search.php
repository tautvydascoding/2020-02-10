<?php
include ("header.php");
include ('models/prisijungimas.php');
include ('models/naujienos.php');
?>


<section class="container tarpas-apacia mt-2">
    <div class="row hight-col">

        <main class="col-3 spalva tarpas-desine bg-dark mr-2">
            <div class="row paddingas"> 
                <a href="komandos.php">Komandos</a>
            </div>
            <div class="row paddingas">
                <a href="tvarkarasciai.php">Tvarkarasciai ir rezultatai</a>
            </div>
            <div class="row paddingas">
                <a href="cempionatoLentele.php">Čempionato lentelė</a>
            </div>
            </main>

        <aside class="col spalva">
            <h1> Paieskos rezultatai</h1>
            <div class="">  
                <?php 
                    if (isset($_POST['search'])) {
                        $search = mysqli_query(getPrisijungimas(), $_POST['search']);
                        $sql = "SELECT * FROM naujienos WHERE titel LIKE '%$search%'";
                        $result = mysqli_query(getPrisijungimas(),$sql) or die ("could not search");
                        $count = mysqli_num_rows($result);

                        echo "<div><h6>" . "Rasta " . $count . " straipsniai !" . "</h6></div>";

                        if ($count == 0) {
                            echo "Nera rezultatu";
                        } else {
                            while ($row = mysqli_fetch_array($result)) {  
                            echo "<div>" . "<h4>" . $row['titel'] . "</h4>" .
                            "<p>".  $row['text'] . "</p>" . "</div>";
                        }
                            
                        }
                    }
                
                ?>
            </div>


            </aside>

        </div>
    </section>

<?php
include ("footer.php");
?>