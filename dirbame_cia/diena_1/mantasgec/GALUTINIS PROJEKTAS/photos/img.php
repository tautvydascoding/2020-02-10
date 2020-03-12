<?php
include_once("../models/prekes.php");

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $pname = rand(1000,10000)."-".$_FILES['file']['name'];
    $tname = $_FILES['file']['tmp_name'];
    $uploads_dir='../photos';
    move_uploaded_file( $tname, $uploads_dir.'/'.$pname);
    $s="INSERT into foto(title, image)VALUES('$title','$pname')";
    if(mysqli_query($prisijungimas, $s)){
        echo "file succesfully added!";
    }else{
        echo "ERROR";
        }
}


  ?>


<div class="content">
    <form  action="img.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="title">
        <div >
            <input type="file" name="file">
        </div>
        <div>
           <textarea name="text" cols="40" rows="4" placeholder="say something about this image..."></textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="upload image">
        </div>
    </form>

</div>
