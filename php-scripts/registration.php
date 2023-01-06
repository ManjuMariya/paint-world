<!DOCTYPE html>
<html>

<body>
   <?php
   $name   =   $_POST['name'];
   $email  =   $_POST['email'];
   $pass   =   $_POST['pass'];


   // local db
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db = "paint";


   if ((!isset($name) || $name == '') || (!isset($email) || $email == '') || (!isset($pass) || $pass == '')) {
      echo "<script> alert('All fields are required!');window.location.href='../register.php';</script>";
      die();
   }

   $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

   $test_sql = "SELECT * FROM users WHERE email='" . $email . "' ";
   $result = mysqli_query($conn, $test_sql);
   $num = mysqli_num_rows($result);

   if ($num == 1) {
      echo "<script> alert('Account already registered ✅, please login to continue!');window.location.href='../login.php';</script>";
      die();
   }

   $sql = "INSERT INTO users(name, email, password) VALUES('$name','$email','$pass')";
   if ($conn->query($sql) === TRUE) {
      echo "<script> alert('Account Created ✅, please login to continue!');window.location.href='../login.php';</script>";
   } else {
      echo "error" . $conn->error;
   }
   $conn->close();
   ?>
</body>
<html>