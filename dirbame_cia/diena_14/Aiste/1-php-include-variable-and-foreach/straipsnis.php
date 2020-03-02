
<!-- 2.1 straipsnis.php faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde -->
<div  class="container bg-info "> <?php echo $vardas . " " . $pavarde .  " " . $i ?></div>


<!-- 2.2 straipsnis.php faile sukurti   'container' 'main' 'article' -->
<div class="container">
    <main>
        <article>
            <h2>        <?php  echo $straipnis[0] ?>      </h2>
            <p>         <?php  echo $straipnis[1] ?>      </p>
            <div>       <?php  echo $straipnis[2] ?>      </div>
        </article>
    </main>
</div>


<!-- 
// 2.3 'article' videje sukurti:
// 2.3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
// 2.3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
// 2.3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo) -->
