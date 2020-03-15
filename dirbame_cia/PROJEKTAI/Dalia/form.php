<?php include_once('prekes.php') ?>
<?php include('header.php'); ?>

<link rel="stylesheet" type="text/css" href="css/main.css">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4 form-div">
        <form action="form.php" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-3 mt-3 ">Pridėti prekę</h3>
          <p> <a href="registration_login/admin/home.php" style="color: green; ">GRĮŽTI Į ADMIN</a> </p><br>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Įkelti nuotrauką</h4>
              </div>
              <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
          </div>
          <div class="form-group">
            <textarea name="bio" class="form-control" placeholder="PREKĖS PAVADINIMAS"></textarea>
          </div>
          <div class="form-group">
            <textarea name="bio2" class="form-control" placeholder="APRAŠYMAS"></textarea>
          </div>
          <div class="form-group">
            <textarea name="price" class="form-control" placeholder="KAINA"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-success btn-block">Išsaugoti prekę</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<script src="script.js"></script>
<?php include('footer.php'); ?>
