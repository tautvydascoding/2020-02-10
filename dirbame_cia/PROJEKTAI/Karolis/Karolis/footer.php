
 <form class="form-search"action="includes/google.search.php"  method="post">
   <input type="text" name="monster" placeholder="Google-monster name">
   <button type="submit" name="search-submit">Search</button>
 </form>
 <br>
 <br>

 <div><?php
   if (isset($_SESSION['admin'])) {
    echo
 'Admin Panel:

    <br>
    <form class="form-create" action="models/create.php" method="post">
      <input type="text" name="monster" placeholder="monster name">
      <input type="text" name="Characteristics" placeholder="Characteristics">
      <input type="text" name="Location" placeholder="Location">
      <button type="submit" name="search-submit">Create</button>
  </form>
   <form class="form-delete" action="models/delete.php" method="post">
    <input type="text" name="id" placeholder="monster ID number">
    <button type="submit" name="search-submit">Delete</button>
 </form>
 <form class="form-update" action="models/update.php" method="post">
  <input type="text" name="id" placeholder="monster id">
   <input type="text" name="monster" placeholder="monster name">
   <input type="text" name="Characteristics" placeholder="Characteristics">
   <input type="text" name="Location" placeholder="Location">
   <button type="submit" name="search-submit">Update</button>
 </form>';
 }else {
   echo "Not admin!";
 }
 ?>

</div>
