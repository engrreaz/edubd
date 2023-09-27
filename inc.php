<?php
session_start();


if (isset($_COOKIE["user"])) {
    $_SESSION["user"] = $_COOKIE["user"];
    $usr = $_SESSION["user"];
} else {
    $usr = $_SESSION["user"] ?? 'Guest';
}
// echo '**' . $usr . '**';


if (!isset($_COOKIE["LANG"])) {
    setcookie("LANG", "en", time() + (86400 * 365), "/"); // 86400 = 1 day
}
$prevlang = $_COOKIE["LANG"];

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    setcookie("LANG", "$lang", time() + (86400 * 365), "/"); // 86400 = 1 day

    if ($prevlang != $lang) {
        header('Location: ' . $_SERVER['REQUEST_URI']);
    }
}
$lang = $_COOKIE["LANG"];

$sy = date('Y');
$tday = date('Y-m-d');
$cur = date('Y-m-d H:i:s');






include_once('insinfo.php');
include_once('dbase.php');

$uri = $_SERVER['REQUEST_URI'];
$ip = $_SERVER['REMOTE_ADDR'];

$vst = "INSERT INTO visitor VALUES (NULL, '$uri','$ip','$tday','$cur')";
$conn->query($vst);

// USER Information

$usrname = 'Name';
$usrpic = 'assets/images/user.png';

if (strpos($_SERVER['REQUEST_URI'], 'admin')) {
    if ($usr == 'Guest') {
        header("Location:../index.php");
    }
    include 'header.php';
    echo '<body onclick="load();">';
    include '../cdn/home_top.php';
    include 'nav.php';
} else {
    include 'cdn/header.php';
    echo '<body onclick="load();">';
    include 'cdn/home_top.php';
    include 'cdn/nav.php';
}