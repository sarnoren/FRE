<?php
setcookie("theme", "", time() - 3600);
header("Location: settings.php");
exit();
