<!DOCTYPE html>
<html>

<body>
  <?php
  $email   =   $_POST['email'];
  $pass   =   $_POST['pass'];


  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "paint";


  if ((!isset($email) || $email == '') || (!isset($pass) || $pass == '')) {
    echo "<script> alert('All fields are required!');window.location.href='../login.php';</script>";
    die();
  }

  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
  $sql = "SELECT password FROM users WHERE email='" . $email . "' ";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (strcmp($pass, $row["password"]) == 0) {
        session_start();
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        header("Location: ../ui.php ");
      } else {
        echo "<script> alert('Wrong credentials ❌!');window.location.href='../login.php';</script>";
      }
    }
  } else {
    echo "<script> alert('Account not found ❌!');window.location.href='../register.php';</script>";
    exit();
  }

  $conn->close();
  ?>
</body>
<html>