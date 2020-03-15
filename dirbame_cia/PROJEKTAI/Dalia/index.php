<?php
include('header.php');
  $conn = mysqli_connect("localhost", "root", "root", "parduotuve");
  $results = mysqli_query($conn, "SELECT * FROM prekes2");
  $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>

  <div class="container bg-ligh">
    <div class="row justify-content-center">

        <h1>TOPO CENTRAS</h1>
      <div class="col-12" style="margin-top: 30px;">

        <table class="table table-striped table-hover table-bordered ">
          <thead>
            <th>Nuotrauka</th>
            <th>Prekės pavadinimas</th>
            <th>Aprašymas</th>
            <th>Kaina</th>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td> <img src="<?php echo 'images/' . $user['profile_image'] ?>" width="90" height="90" alt=""> </td>
                <td> <?php echo $user['bio']; ?> </td>
                <td> <?php echo $user['bio2']; ?> </td>
                <td> <?php echo $user['price']; ?> </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php include('footer.php'); ?>
