<?php
include("../models/prekes.php");
require 'action.php';

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="../css/master.css">

</head>
<body class="bg-dark">
<div class="container">
<div class="row justify-content-center mb-2">
    <div class="col-lg-5 bg-light rounded mt-2">
        <h4>Write your comment!</h4>
        <form  action="comments.php" method="post">
            <div class="form-group">
                <input type="text" name="name" value="" placeholder="enter your name" required >
</div>
<div class="form-group">
    <textarea name="comment" class="" placeholder="write your comment!" rows="8" cols="60"></textarea>
</div>
    <button class="btn btn-primary"type="submit" name="submit">Post comment!</button>
    <?php
$sql = "SELECT * FROM comment_table ORDER BY id DESC";
$result = $prisijungimas->query($sql);
while($row=$result->fetch_assoc()){

     ?>
<div class="card mb-2 border-secondary">
<div class="card-header bg-secondary py-1 text-dark"></div>
<span class="font-italic">posted by:<?= $row['name'];?></span>
<span class="font-italic">On : <?= $row['cur_date'];?></span>
</div>
<div class="card-body py-2">
<p class="card-text"><?= $row['comment']  ?></p>
</div>
<div class="card-footer py-2">
   <a href="action.php?del=<?= $row['id'] ?>" class="text-danger mr-2" onclick="return confirm('do you want to delete this comment?');"
       title="Delete"><i=class="fas fa-trash"></i></a>
       <a href="comments.php?edit=<?=$row['id'] ?>"class="text-success" title="edit"><i class="fas fa-edit"</a>


    </div>


<?php } ?>
</form>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
<!--  mano js pats zemiausias!!!-->
<script type="text/javascript" src="master.js"></script>

</body>
</html>
