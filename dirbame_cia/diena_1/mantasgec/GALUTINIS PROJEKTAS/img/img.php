<?php
if(isset($_POST['upload'])){
$target = "img/".basename($_FILES['foto']['name']);
mysqli_select_db($prisijungimas,'foto');
$image= $_FILES['image']['name'];
$text =$_POST['text'];
$sql = "INSERT INTO img (image, text) VALUES ('$image', '$text')";
mysqli_query($prisijungimas, $sql);

if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
    $msg = "image uploaded successfuly";
}else{
    $msg = "There was a problem uploading image";
}
}

 ?>


<div class="content">
    <form  action="../index.php" method="post" enctype="multipart/form-data">
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
