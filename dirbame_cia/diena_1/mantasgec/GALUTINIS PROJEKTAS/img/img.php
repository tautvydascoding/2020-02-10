<?php
define("DB_HOST", 'localhost');
define("DB_MYSQL_USER", 'root');
define("DB_MYSQL_PASSWORD", 'root');
define("DB_NAME", 'zvakes');
$prisijungimas = mysqli_connect(DB_HOST, DB_MYSQL_USER, DB_MYSQL_PASSWORD, DB_NAME,3307);

if(isset($_POST['upload']))
$filename = $_FILES['upload']
$filetmpname = $_FILES['upload']['tmp_name'];
$folder='imguploads/';

move_uploaded_files($filetmpname, $folder.destination)

$s = "INSERT INTO 'foto'('imagename')VALUES ('')"


 ?>


<div class="content">
    <form  action="img/img.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="size">
        <div >
            <input type="file" name="foto">
        </div>
        <div>
           <textarea name="text" cols="40" rows="4" placeholder="say something about this image..."></textarea>
        </div>
        <div>
            <input type="submit" name="upload" value="upload image">
        </div>
    </form>

</div>
