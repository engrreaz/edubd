<?php
//Include GP config file
include_once 'gpConfig.php';
setcookie("user", $userData['email'], time() - (86400 * 365 * 10), "/");
//Unset token and user data from session
unset($_SESSION['token']);
unset($_SESSION['userData']);
unset($_SESSION['user']);

//Reset OAuth access token
$gClient->revokeToken();

//Destroy entire session
session_unset();
session_destroy();


// session_start();


// session_destroy();



//Redirect to homepage
header("Location:index.php");
?>