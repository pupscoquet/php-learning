<?php
session_start();
$users = ["david" => "password80", "clau" => "secreto"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // continue here > day 3 - hour 2
}
?>
