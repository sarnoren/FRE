<?php
session_start();
$theme = $_COOKIE["theme"] ?? "light";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $new_theme = $_POST["theme"];
    setcookie("theme", $new_theme, time() + (86400 * 30));
    header("Location: settings.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?= $theme ?>">
    <h2>Settings</h2>
    <form method="post">
        Select Theme:
        <select name="theme">
            <option value="light" <?= $theme === "light" ? "selected" : "" ?>>Light</option>
            <option value="dark" <?= $theme === "dark" ? "selected" : "" ?>>Dark</option>
        </select>
        <button type="submit">Save</button>
    </form>

    <h3>Session Data</h3>
    <pre><?php print_r($_SESSION); ?></pre>

    <h3>Cookie Data</h3>
    <pre><?php print_r($_COOKIE); ?></pre>

    <a href="dashboard.php">Back to Dashboard</a> |
    <a href="logout.php">Logout</a> |
    <a href="forget_theme.php">Forget Theme</a>
</body>
</html>
