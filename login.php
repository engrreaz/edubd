<?php
session_start();
$_SESSION["user"] = 'engrreaz';
setcookie("user", "engrreaz", time() + (86400 * 365), "/");
header("Location: index.php", true, 301);
exit();
?>