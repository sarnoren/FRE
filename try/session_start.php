<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = trim($_POST["username"]);
// Save username in session
$_SESSION["username"] = $username;
// Redirect to welcome page
header("Location: welcome.php");
exit;
}
?>