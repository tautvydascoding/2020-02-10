<?php
session_start();
include_once("../models/prekes.php");
if(isset($_SESSION['uname'])){
}else{

}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="css/master.css">
        <title></title>
    </head>
    <body>
<h1>Welcome to admin panel</h1>
<?php require_once 'process.php'; ?>
<?php
if(isset($_SESSION['message'])):?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
echo $_SESSION['message'];
unset($_SESSION['message']);
     ?>

</div>
<?php endif ?>

<div class="container">

<?php
$mysqli= new mysqli('localhost', 'root','root', 'zvakes',3307);
$result = $mysqli->query( "SELECT * FROM prekes");
//pre_r($result);
 ?>

<div class="row justify-content-center">
    <table class="table">
        <thread>
            <tr>
                <th>pavadinimas</th>
                <th>kaina</th>
                <th colspan="2">Action</th>
            </tr>
        </thread>
        <?php
        while ($row = $result->fetch_assoc()):?>
        <tr>
            <td><?php echo $row['pavadinimas']; ?></td>
            <td><?php echo $row['kaina']; ?></td>
            <td>
                <a href="admin.php?edit=<?php echo $row['id'];?>"
                    class="btn btn-info">edit</a>
                    <a href="admin.php?delete=<?php echo $row['id'];?>"
                        class="btn btn-danger">delete</a>
            </td>
        </tr>
<?php endwhile; ?>
</table>
</div>
<?php
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}
?>

<!-------------------------------------- -->
<div class="row justify-content-center">
<form  action="process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="form-group">
        <label>pavadinimas</label>
        <input type="text" name="pavadinimas" class="form-control" value="<?php echo $pavadinimas; ?>" placeholder="enter your name">
    </div>
    <div class="form-group">
        <label>kaina</label>
        <input type="text" name="kaina" class="form-control" value="<?php echo $kaina; ?>" placeholder="pavadinimas">
    </div>
    <div class="form-group">
        <?php if($update==true): ?>
      <button type="submit" class="btn btn-info" name="update">Update</button>
  <?php else: ?>
     <button type="submit"class="btn btn-primary" name="save">Save</button>
 <?php endif; ?>
    </div>
</form>
</div>

</form>


<a href="logout.php">Logout</a>
</div>
    </body>
</html>
