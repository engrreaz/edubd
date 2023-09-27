<?php
session_start();
unset($_SESSION['user']);
session_unset();
session_destroy();
setcookie("user", "engrreaz", time() - (86400 * 365 * 10), "/");
header("Location:index.php");

echo $_SESSION["user"];
?>