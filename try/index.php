<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["student_id"] = rand(100000, 999999);
    $_SESSION["courses"] = ["Intro to PHP", "HTML Basics", "CSS Styling"];
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        Name: <input type="text" name="name" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
