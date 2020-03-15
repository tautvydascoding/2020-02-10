<?php
require_once "header.php";
 ?>



 <main>
<h1>Signup</h1>
<?php
if (isset($_GET['error'])) {
  if ($_GET['error'] == "emptyfields") {
    echo '<p class="signuperror">Fill in all fields!</p>';
  }
  else if ($_GET['error'] == "invalidUsernamemail") {
    echo '<p class="signuperror">Invalid username and e-mail!</p>';
  }
  else if ($_GET['error'] == "invalidUsername") {
    echo '<p class="signuperror">Invalid username!</p>';
  }
  else if ($_GET['error'] == "invalidmail") {
    echo '<p class="signuperror">Invalid e-mail!</p>';
  }
  else if ($_GET['error'] == "passwordcheck") {
    echo '<p class="signuperror">Your password do not match!</p>';
  }
  else if ($_GET['error'] == "usertaken") {
    echo '<p class="signuperror">Username already taken!</p>';
  }
}
// else if ($_GET['signup'] == "success") {
//   echo '<p class="signupsuccess">Signup sucessful!</p>';
// }

 ?>
<form class="form-signup"action="includes/signup.inc.php"  method="post">
  <input type="text" name="Username" placeholder="Username">
  <input type="text" name="mail" placeholder="E-mail">
  <input type="password" name="password" placeholder="Password">
  <input type="password" name="password-repeat" placeholder="Repeat Password">
  <button type="submit" name="signup-submit">Signup</button>
</form>
 </main>
