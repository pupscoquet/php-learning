<?php
session_start();
$_SESSION["username"] = "Victoria";
$_SESSION["role"] = "admin";
echo "Session variable set!";
?>
