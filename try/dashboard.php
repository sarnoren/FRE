<?php
session_start();
if (!isset($_SESSION["name"])) {
    header("Location: index.php");
    exit();
}
$theme = $_COOKIE["theme"] ?? "light";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?= $theme ?>">
    <h2>Welcome, <?= htmlspecialchars($_SESSION["name"]) ?>!</h2>
    <p>Your student ID: <?= $_SESSION["student_id"] ?></p>
    <h3>Your Courses:</h3>
    <ul>
        <?php foreach ($_SESSION["courses"] as $course): ?>
            <li><?= htmlspecialchars($course) ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="settings.php">Settings</a> |
    <a href="logout.php">Logout</a>
</body>
</html>
