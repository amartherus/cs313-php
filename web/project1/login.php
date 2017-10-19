<?php
// Start the session
session_start();
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

header("Location: browseItems.php");
die();
?>
