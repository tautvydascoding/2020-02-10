<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "puslapis1");
        session_start(); // Starting Session
        $error = ''; // Variable To Store Error Message

        if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Prasome nurodyti tikslius prisijungimo duomenis";
        }
        else{
        // Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM registracija  WHERE id = ?";
        // mysqli_connect() function opens a new connection to the MySQL server.
        // SQL query to fetch information of registerd users and finds user match.
        // $query = "SELECT username FROM registracija WHERE username = '$username' and password = '$password'";
      //   if (mysqli_num_rows($query) > 1) {
  	  // $username_error = "Sorry... username already taken";}
        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();
        if($stmt->fetch()); //fetching the contents of the row {
        $_SESSION['login_user'] = $username; // Initializing Session
        header("location: controllers/profile.php"); // Redirecting To Profile Page
        }
    }
        ?>
    </body>
</html>
