<?php
session_start();
$users = ["David" => "password80", "Clau" => "clau10217"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if (isset($users[$username]) && $users[$username] == $password) {
    $_SESSION["username"] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    echo "Invalid username or password";
  }
}
?>

<form method="POST">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>
