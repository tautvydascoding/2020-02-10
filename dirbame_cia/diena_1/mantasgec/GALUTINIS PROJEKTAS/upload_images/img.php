<?php
include_once("../models/prekes.php");
$prisijungimas= mysqli_connect('localhost', 'root','root', 'zvakes',3307);
$msg = "";
if(isset($_POST['upload'])){
    $target = "images/" .basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    $sql = "INSERT INTO images (image, text)VALUES('$image', '$text')";
    mysqli_query($prisijungimas, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg = "upload successfull!";
    }else{
        $msg = "upload FAILED!";
    }
}

  ?>


<div id="content">
    <?php
$prisijungimas= mysqli_connect('localhost', 'root','root', 'zvakes',3307);
$sql = "SELECT * FROM images";
$result = mysqli_query($prisijungimas, $sql);
while ($row = mysqli_fetch_array($result)){
    echo "<div id= 'img_div'>";
    echo "<img src='images/".$row['image']."'  >";
    echo "<p>". $row['text']."</p>";
    echo "</div>";
}
     ?>

    <form  action="../upload_images/img.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="title">
        <div >
            <input type="file" name="image">
        </div>
        <div>
           <textarea name="text" cols="40" rows="4" placeholder="say something about this image..."></textarea>
        </div>
        <div>
            <input type="submit" name="upload" value="upload image">
        </div>
    </form>

</div>
